<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Application;
use App\Programe;
use App\Academic;
use Auth;
use Carbon\Carbon;
use Storage;
use Image;
use Toastr;
class ProfileController extends Controller
{
    public function addPersonal()
    {
        return view('backend.student.profiles.add-personal');
    }

    public function postAddPersonal(Request $request)
    {
        $this->validate($request,array(
           'name' => 'required',
           'fname' => 'required',
           'mname' => 'required',
           'dob' => 'required',
           'gender' => 'required',
           'nationality' => 'required',
           'guardian' => 'required',
           'relation' => 'required',
           'present_address' => 'required',
           'parmanent_address' => 'required',
           'extra_curriculam' => 'required',
           'image' => 'required|image|mimes:jpeg,png,gif,jpg,bmp',
       ));

       $applicant = Application::find(Auth::guard('application')->user()->id);

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

       $applicant->name                 = $request->name;
       $applicant->fname                = $request->fname;
       $applicant->mname                = $request->mname;
       $applicant->dob                  = $request->dob;
       $applicant->gender               = $request->gender;
       $applicant->nationality          = $request->nationality;
       $applicant->guardian             = $request->guardian;
       $applicant->guardian_relation    = $request->relation;
       $applicant->present_address      = $request->name;
       $applicant->parmanent_address    = $request->parmanent_address;
       $applicant->skill                = $request->extra_curriculam;
       $applicant->image                = $imagename;
       $applicant->approved             = false;

       $applicant->save();

       Toastr::success(' Succesfull added . Login to Complete the profile  ', 'Success');
       return redirect()->route('application.add.academic');
    }

    public function addAcademic()
    {
        return view('backend.student.profiles.add-academic');
    }
    public function postAddAcademic(Request $request)
    {
        $this->validate($request, array(
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
}
