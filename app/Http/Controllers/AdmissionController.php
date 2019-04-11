<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Application;
use App\Programe;
use App\Academic;
use Carbon\Carbon;
use Session;
use Toastr;
use Storage;
use Image;
use Validator;
use App\Notifications\NewApplication;
use Notification;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('frontend.admission.home');
    }
    public function apply(Request $request)
    {
        $programs = Programe::all();
        //$application = $request->session()->get('application');
        //return view('products.create-step1',compact('product', $product));
        $applicant = $request->session()->get('applicant');
        //return view('products.create-step1',compact('product', $product));
        return view('frontend.admission.apply')->withPrograms($programs)->withApplicant($applicant);
    }
    public function postApply(Request $request)
    {

        $validatedData = $this->validate($request,array(
           'semester' => 'required|numeric',
           'year' => 'required|numeric',
           'shift' => 'required|numeric',
           'level' => 'required',
       ));

       if(empty($request->session()->get('applicant'))){
            $applicant = new Application();
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
        }else{
            $applicant = $request->session()->get('applicant');
            $applicant->fill($validatedData);
            $request->session()->put('applicant', $applicant);
        }

        //return $applicant;

        return redirect()->route('admission.personal');


    }

    public function getPersonal(Request $request)
    {
        $applicant = $request->session()->get('applicant');
        return view('frontend.admission.from.personal-info')->withApplicant($applicant);

    }
    public function postPersonal(Request $request)
    {
        $validatedData = $this->validate($request,array(
           'name' => 'required',
           'fname' => 'required',
           'mname' => 'required',
           'dob' => 'required',
           'gender' => 'required',
           'nationality' => 'required',
           'phone' => 'required',
           'email' => 'required|email|unique:applications',
           'guardian' => 'required',
           'relation' => 'required',
           'present_address' => 'required',
           'parmanent_address' => 'required',
           'image' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
       ));

       $applicant = $request->session()->get('applicant');
       //$request->session()->forget('applicant');


       $applicant->fill($validatedData);
       // $applicant->name     = $request->name;
       // $applicant->fname     = $request->fname;
       // $applicant->mname     = $request->mname;
       $applicant->guardian_relation     = $request->relation;

       $image = $request->file('image');
       $slug  = str_slug($request->name);

       if (isset($image)){
           if (!Storage::disk('public')->exists('admission')){
               Storage::disk('public')->makeDirectory('admission');
           }
           $date = Carbon::now()->toDateString();
           $imagename = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
           $appImage = Image::make($image)->resize(400, 400)->save($image->getClientOriginalExtension());

           Storage::disk('public')->put('admission/'.$imagename, $appImage);

       } else {
           $imagename = 'default.png';
       }
       $password = str_random(8);
       $applicant->image     = $imagename;
       $applicant->approved     = false;
       $applicant->password     = Hash::make($password);
       $applicant->save();

       //$request->session()->forget('applicant');

       $request->session()->put('applicant_id', $applicant->id);
       $request->session()->put('pass', $password);

       return redirect()->route('admission.academic');

    }
    public function getAcademic(Request $request)
    {
        $applicant_id = $request->session()->get('applicant_id');
        $applicant = Application::find($applicant_id);
        //return $applicant;
        return view('frontend.admission.from.academic-info')->withApplicant($applicant);

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
            'institute.*' => 'required|alpha_dash',
            'marksheet.*' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
            'certificate.*' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',

        ));

        //$data = [ 'data' => $request->all() ];
        //return $request->all();


        $input = $request->all();
        //return $input;
        $applicant_id = $request->session()->get('applicant_id');

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

                Storage::disk('public')->put('admission/academic/certificate'.$certificateImg, $certificateImgApp);

            } else {
                $certificateImg = 'default.png';
            }

            $academic->marksheet = $imagename;
            $academic->certificate = $certificateImg;
            $academic->save();
        }

        $request->session()->put('applicant_id', $applicant_id);
        return redirect()->route('admission.choice');
    }

    public function getChoice(Request $request)
    {
        $applicant = $request->session()->get('applicant_id');
        $academic = $request->session()->get('academic');
        $programs = Programe::all();
        return view('frontend.admission.from.choice')->withApplicant($applicant)->withPrograms($programs)->withAcademic($academic);

    }
    public function postChoice(Request $request)
    {


        $applicant_id = $request->session()->get('applicant_id');
        //$academic = $request->session()->get('academic');

        //return $applicant_id;

        $this->validate($request, array(
            'to' => 'required|array|max:3|min:3',
            'to*' =>'required|integer'
        ));
//return $request->all();
        $applicant = Application::where('id',$applicant_id)->first();
        //return $applicant;
        $applicant->programs()->attach($request->to);

        //$request->session()->put('applicant_id', $applicant->id);

        return $applicant;
        return redirect()->route('admission.confirm');
    }

    
    public function getConfirm( Request $request)
    {
        $applicant_id = $request->session()->get('applicant_id');
        $pass = $request->session()->get('pass');

       // return $pass;
        $applicant = Application::find($applicant_id);

        $result = 0;
        foreach( $applicant->academics as $data ){
            $result = $data->result;
        }
        return view('frontend.admission.from.cv')->withApplicant($applicant);
    }

    public function editPersonal($id)
    {
        $application = Application::find($id);
        return view('frontend.admission.from.edit-personal-info')->withApplication($application);
    }
    public function editPersonalSubmit(Request $request, $id)
    {

        return $request->image;
        $application = Application::find($id);
        return view('frontend.admission.from.edit-personal-info')->withApplication($application);
    }



    public function postConfirm( Request $request )
    {
        $applicant_id = $request->session()->get('applicant_id');
        $password = $request->session()->get('pass');

       // return $pass;
        $applicant = Application::find($applicant_id);
        
        
        
        Notification::send($applicant, new NewApplication($applicant, $password));

        Toastr::success(' Succesfully Created User ', 'Success');

        $request->session()->forget('applicant');
        $request->session()->forget('applicant');

        return redirect()->route('admission.home');

    }


    public function checkEmail(Request $request )
    {

       $this->validate($request, ['email' => 'required|email']);

       $check_email = Application::where('email',$request->email)->exists();

       if ($check_email) {
           return 'found';
       }else{
           return 'not-found';
       }
    }

    public function login()
    {
        return view('frontend.admission.login');
    }
    public function guideline()
    {
        return view('frontend.admission.login');
    }
    public function complain()
    {
        return view('frontend.admission.login');
    }
}
