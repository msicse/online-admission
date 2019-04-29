<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Application;
use App\Programe;
use App\Academic;
use Carbon\Carbon;
use Toastr;
use Storage;
use Image;
use Auth;
use PDF;


class AdmissionController extends Controller
{



    public function getPersonal()
    {

        return view('frontend.application.personal');

    }
    public function getAcademicAll()
    {

        return view('frontend.application.academic');

    }
    public function getProgram()
    {

        return view('frontend.application.application');

    }
    public function getPayment()
    {

        return view('frontend.application.payment');

    }
    public function getApplication()
    {

        $programs = Programe::all();

        $applicant = Application::find(Auth::guard('application')->user()->id);


       if ( !empty($applicant->semester)) {
           Toastr::error('Sorry !! You are already applied ', 'Error');
            return redirect()->route('application.home');
       }
        return view('frontend.admission.apply')->withPrograms($programs);

    }
    public function postApplication(Request $request)
    {

        $validatedData = $this->validate($request,array(
           'semester' => 'required|numeric',
           'year' => 'required|numeric',
           'shift' => 'required|numeric',
           'level' => 'required',
       ));

       $applicant = Application::find(Auth::guard('application')->user()->id);


       if ( !empty($applicant->semester)) {

            Toastr::error('You are already applied ', 'Error');
            return redirect()->route('application.home');
       }

       $applicant->Semester     = $request->semester;
       $applicant->year     = $request->year;
       $applicant->shift     = $request->shift;
       $applicant->level     = $request->level;
       $applicant->save();

        Toastr::success('Process is Completed ', 'Success');
        return redirect()->route('application.program.select');



    }


    public function getProgramSelect()
    {
        $programs = Programe::all();
        $applicant = Application::find(Auth::guard('application')->user()->id);

        if ( $applicant->programs()->count() != 0) {

            Toastr::error('You are already applied ', 'Error');
            return redirect()->route('application.home');
       }

        return view('frontend.admission.from.choice')->withPrograms($programs);

    }
    public function programSelect(Request $request)
    {
        //return $request->all();
        $applicant_id = Auth::guard('application')->user()->id;

        //$applicant = Application::where('id',$applicant_id)->first();
        $applicant = Application::find(Auth::guard('application')->user()->id);

        if ( $applicant->programs()->count() != 0) {

            Toastr::error('You are already applied ', 'Error');
            return redirect()->route('application.home');
       }

        $applicant->programs()->attach($request->to);

        //return $applicant;
        Toastr::success('Process is Completed ', 'Success');
        return redirect()->route('application.home');

    }


    public function getAcademic()
    {

        return view('frontend.admission.from.academic-info');

    }
    public function postAcademic(Request $request)
    {

        //return $request->all();
        $validatedData = $this->validate($request, array(
            // "roll"    => "required|array",
            // "roll.*"  => "required|numeric|min:6",
            'roll.*' => 'required|numeric|min:6',
            'reg.*' => 'required|numeric|min:6',
            'passing_year.*' => 'required|numeric|min:4',
            'result.*' => 'required|between:1,99.99',
            'title.*' => 'required|alpha_dash',
            'institute.*' => 'required',
            'marksheet.*' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
            'certificate.*' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',

        ));

        //$data = [ 'data' => $request->all() ];
        //return $request->all();


        $input = $request->all();
        //return $input;
        $applicant_id = Auth::guard('application')->user()->id;

        for ($i=0; $i < count( $input['roll']) ; $i++) {
            $academic  = new Academic;
            $academic->application_id = $applicant_id;
            $academic->title = $request->title[$i];
            $academic->roll = $request->roll[$i];
            $academic->reg = $request->reg[$i];
            $academic->institute = $request->institute[$i];
            $academic->group = $request->group[$i];
            $academic->passing_year = $request->passing_year[$i];
            $academic->board = $request->board[$i];
            $academic->result = $request->result[$i];

            $image = $request->file('marksheet')[$i];
            $certificate = $request->file('certificate')[$i];

            //return $image;

            $slug  = str_slug($request->title[$i]);
            if (isset($image)){
                if (!Storage::disk('public')->exists('admission/academic')){
                    Storage::disk('public')->makeDirectory('admission/academic');
                }
                $date = Carbon::now()->toDateString();
                $imagename = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $appImage = Image::make($image)->resize(400, 400)->save($image->getClientOriginalExtension());

                Storage::disk('public')->put('admission/academic/'.$imagename, $appImage);

            } else {
                $imagename = 'default.png';
            }

            if (isset($certificate)){
                if (!Storage::disk('public')->exists('admission/academic/certificate')){
                    Storage::disk('public')->makeDirectory('admission/academic/certificate');
                }
                $date = Carbon::now()->toDateString();
                $certificateImg = $slug.'-'.$date.'-'.uniqid().'.'.$certificate->getClientOriginalExtension();
                $certificateImgApp = Image::make($certificate)->resize(400, 400)->save($certificate->getClientOriginalExtension());

                Storage::disk('public')->put('admission/academic/certificate/'.$certificateImg, $certificateImgApp);

            } else {
                $certificateImg = 'default.png';
            }

            $academic->marksheet = $imagename;
            $academic->certificate = $certificateImg;
            $academic->save();
        }

        Toastr::success(' Succesfully Added Academic Info ', 'Success');
        return redirect()->route('application.home');
    }

    public function getChoice(Request $request)
    {
        $programs = Programe::all();
        return view('frontend.admission.from.choice')->withPrograms($programs);

    }
    public function submitChoice(Request $request)
    {


        $applicant_id = Auth::guard('application')->user()->id;
        //$academic = $request->session()->get('academic');

        //return $applicant_id;

        $this->validate($request, array(
            'to' => 'required|array|max:3|min:3',
            'to*' =>'required|integer'
        ));
        //return $request->all();
        $applicant = Application::where('id',$applicant_id)->first();

        if ($applicant->programs()->count() > 3 ) {
            Toastr::error('Already Added', 'Error');
            return redirect()->route('application.home');
        }
        //return $applicant;
        $applicant->programs()->attach($request->to);

        //$request->session()->put('applicant_id', $applicant->id);

        //return $applicant;
        Toastr::success(' Succesfully Added Choice Info ', 'Success');
        return redirect()->route('application.home');
    }

    public function getCv()
    {
        $applicant = Auth::guard('application')->user();
        //$applicant = Application::find(45);
        return view('frontend.admission.from.cv')->withApplicant($applicant);
    }
    public function downloadCV()
    {
        //$applicant = Application::find(45);
        $applicant = Auth::guard('application')->user();
        //return view('')->withApplicant($applicant);
        //$pdf = PDF::loadView('frontend.application.download-pdf', compact('applicant') )->save('pdf/specification.pdf');
        //$pdf = PDF::loadView('frontend.application.download-pdf', compact('applicant'))->setPaper('a4');
        //return view('frontend.application.pdf',compact('applicant'));
        $pdf = PDF::loadView('frontend.application.pdf-test',compact('applicant'))->setPaper('a4','portrait');
        return $pdf->stream('cv-of-'.$applicant->name.'.pdf');
    }
}
