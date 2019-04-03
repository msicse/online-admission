<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Application;
use App\Programe;
use App\Ssc;
use App\Hsc;
use App\Academic;
use Carbon\Carbon;
use Session;
use Toastr;
use Storage;
use Image;

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
           //'porgram' => 'required|numeric',
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
           'email' => 'required|email',
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
       //return $applicant;
       $applicant->save();
       //return $applicant;
       //$request->session()->forget('applicant');

       $request->session()->put('applicant_id', $applicant->id);

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
        // $validatedData = $this->validate($request, array(
        //     'roll' => 'required|numeric',
        //     'reg' => 'required|numeric',
        //     'passing_year' => 'required|numeric',
        //     'title' => 'required|alpha',
        //     'institute' => 'required|alpha',
        //     '' => 'required|numeric',
        //     'hsc_reg' => 'required|numeric',
        //     'hsc_year' => 'required|numeric',
        //     'hsc_board' => 'required|alpha',
        //     'hsc_marksheet' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
        //     'ssc_marksheet' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
        // ));

        $input = $request->all();
        //return $input;
        $applicant_id = $request->session()->get('applicant_id');

        for ($i=0; $i < count( $input['roll']) ; $i++) {
            $academic  = new Academic;
            $academic->application_id = $applicant_id;
            $academic->title = 'ssc';
            $academic->roll = $request->roll[$i];
            $academic->reg = $request->reg[$i];
            $academic->institute = $request->institute[$i];
            $academic->group = $request->group[$i];
            $academic->passing_year = $request->passing_year[$i];
            $academic->board = $request->board[$i];
            $academic->result = $request->result[$i];

            $image = $request->file('marksheet')[$i];

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
            $academic->marksheet = $imagename;
            $academic->save();



            //return 'ok';

        }

        // if(empty($request->session()->get('academic'))){
        //
        //      $request->session()->put('academic', $input);
        //  }else{
        //      $academic = $request->session()->get('academic');
        //      $academic->session()->put('academic', $input);
        //  }
        //




        //$request->session()->put('applicant', $applicant);

        //$r =  $request->session()->get('academic');

        //return $r;

        return redirect()->route('admission.choice');
    }

    public function getChoice(Request $request)
    {
        $applicant = $request->session()->get('applicant');
        $academic = $request->session()->get('academic');
        $programs = Programe::all();
        return view('frontend.admission.from.choice')->withApplicant($applicant)->withPrograms($programs)->withAcademic($academic);

    }
    public function postChoice(Request $request)
    {

        //return $request->all();
        $applicant_id = $request->session()->get('applicant');
        //$academic = $request->session()->get('academic');

        //return $applicant_id;

        $applicant = Application::where('id',$applicant_id->id)->first();
        //return $applicant;
        $applicant->programs()->attach($request->to);

        //return $applicant;
        return redirect()->route('admission.confirm');
    }
    public function getConfirm()
    {
        $applicant = Application::find(8);
        return view('frontend.admission.from.cv')->withApplicant($applicant);
    }
    public function postConfirm()
    {
        // code...
    }
    public function verify()
    {
        $programs = Programe::all();
        //$application = $request->session()->get('application');
        //return view('products.create-step1',compact('product', $product));
        return view('frontend.admission.from.verify')->withPrograms($programs);
    }
    public function applicationVerifySubmit(Request $request)
    {
        //return 'ok';
        //return $request->all();
        //session(['apply' => $request->ssc_roll]);

        $this->validate($request,array(
           'ssc_roll' => 'required|numeric',
           'ssc_reg' => 'required|numeric',
           'ssc_year' => 'required|numeric',
           'ssc_board' => 'required',
           'hsc_roll' => 'required|numeric',
           'hsc_reg' => 'required|numeric',
           'hsc_year' => 'required|numeric',
           'hsc_board' => 'required',
       ));

       $ssc = Ssc::where('roll',$request->ssc_roll)
                 ->where('reg',$request->ssc_reg)
                 ->where('passing_year',$request->ssc_year)
                 ->where('board',$request->ssc_board)
                 ->exists();

       $hsc = Hsc::where('roll',$request->hsc_roll)
                 ->where('reg',$request->hsc_reg)
                 ->where('passing_year',$request->hsc_year)
                 ->where('board',$request->hsc_board)
                 ->exists();


        if (!$ssc) {
            return 'ssc';
        }elseif (!$hsc) {
            return 'hsc';
        }else {
            return 'done';
        }


       // if ( !$ssc ) {
       //     Toastr::error('Your SSC information not found', 'Error');
       //     return redirect()->back();
       // }else if ( $hsc === null ) {
       //      Toastr::error('Your HSC information not found', 'Error');
       //      return redirect()->back();
       //  }else {
       //      $session = 34568876 + $ssc->roll;
       //      Session::put('application', $session);
       //  }

        //return redirect()->route('admission.application.form');

       //return $ssc;

       // if(empty($request->session()->get('product'))){
       //      $application = new Application();
       //      $application->fill($validatedData);
       //      $application->session()->put('application', $application);
       //  }else{
       //      $application = $request->session()->get('product');
       //      $application->fill($validatedData);
       //      $application->session()->put('application', $application);
       //  }

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

    public function applicationForm()
    {
        $session_id = Session::get('application') - 34568876;

        if( $session_id == null ){

            Toastr::error('Access Denied', 'Error');

            return redirect()->route('admission.application.verify');
        } else {
            $ssc = Ssc::where('roll', $session_id)->first();
            return view('frontend.admission.from.app-form')->withSsc($ssc);
        }
        //return $session_data;

    }

    public function applicationSubmit(Request $request)
    {

        //return $request->all();

            $this->validate($request,array(
               'semester' => 'required|numeric',
               'year' => 'required|numeric',
               'program' => 'required|numeric',
               'ssc_roll' => 'required|numeric',
               'ssc_reg' => 'required|numeric',
               'ssc_year' => 'required|numeric',
               'ssc_board' => 'required|alpha',
               'hsc_roll' => 'required|numeric',
               'hsc_reg' => 'required|numeric',
               'hsc_year' => 'required|numeric',
               'hsc_board' => 'required|alpha',
               'phone' => 'required',
               'email' => 'required|email',
               'guardian' => 'required',
               'relation' => 'required',
               'present_address' => 'required',
               'parmanent_address' => 'required',
               'nationality' => 'required',
               'password' => 'required',
               'image' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
           ));
           $ssc = Ssc::where('roll',$request->ssc_roll)
                     ->where('reg',$request->ssc_reg)
                     ->where('passing_year',$request->ssc_year)
                     ->where('board',$request->ssc_board)
                     ->first();

           $hsc = Hsc::where('roll',$request->hsc_roll)
                     ->where('reg',$request->hsc_reg)
                     ->where('passing_year',$request->hsc_year)
                     ->where('board',$request->hsc_board)
                     ->first();


            if ( $ssc == null ) {
                Toastr::error('Your SSC Information not Found', 'Error');
                return redirect()->back();
            }
            if ( $hsc == null ) {
                Toastr::error('Your HSC Information not Found', 'Error');
                return redirect()->back();
            }

           $image = $request->file('image');
           $slug  = str_slug($ssc->name);
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



           $application = new Application;

           $application->name               = $ssc->name;
           $application->fname              = $ssc->fname;
           $application->mname              = $ssc->mname;
           $application->dob                = $ssc->dob;
           $application->gender             = $ssc->gender;
           $application->semester           = $request->semester;
           $application->year               = $request->year;
           $application->programe_id        = $request->program;
           $application->phone              = $request->phone;
           $application->email              = $request->email;
           $application->nationality        = $request->nationality;
           $application->guardian           = $request->guardian;
           $application->guardian_relation  = $request->relation;
           $application->ssc_result         = $ssc->result;
           $application->hsc_result         = $hsc->result;
           $application->present_address    = $request->present_address;
           $application->parmanent_address  = $request->parmanent_address;
           $application->image              = $imagename;
           $application->password           = Hash::make($request->password);

           $application->save();

           Toastr::success('Application Process Success', 'Success');

           return redirect()->route('admission.home');

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
