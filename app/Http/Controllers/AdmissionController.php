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

    public function register()
    {
        return view('frontend.admission.register');
    }
    
    public function postRegister(Request $request)
    {
        $this->validate($request,array(
            'name' => 'required',   
            'phone' => 'required',
            'email' => 'required|email|unique:applications',  
        ));

        $password = str_random(8);

        $applicant           = new Application();
        $applicant->name     = $request->name;
        $applicant->email    = $request->email;
        $applicant->phone    = $request->phone;
        $applicant->password = Hash::make($password);
        $applicant->save();

       Notification::send($applicant, new NewApplication($applicant, $password));

       Toastr::success(' Succesfull created . Login to Complete the profile  ', 'Success');
       return redirect()->route('admission.login');
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
        //return $request()->all();

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
           'skill' => 'required',
           'image' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
       ));

$applicant = new Application;

       $applicant->fill($validatedData);
       // $applicant->name     = $request->name;
       // $applicant->fname     = $request->fname;
       // $applicant->mname     = $request->mname;
       $applicant->guardian_relation     = $request->relation;
       $applicant->present_address     = $request->present_address;

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

       Notification::send($applicant, new NewApplication($applicant, $password));

       Toastr::success(' Succesfull created . Login to Complete the profile  ', 'Success');

       $request->session()->forget('applicant');

       return redirect()->route('admission.login');

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
        return view('frontend.admission.guidline');
    }
    public function how()
    {
        return view('frontend.admission.how');
    }
    public function complain()
    {
        return view('frontend.admission.support');
    }
}
