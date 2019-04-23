<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Application;
use App\Programe;


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
       $applicant->permanant_address    = $request->permanant_address;
       $applicant->extar_curriculam     = $request->extar_curriculam;
       $applicant->extar_curriculam     = $request->extar_curriculam;
       $applicant->image                = $imagename;
       $applicant->approved             = false;

       $applicant->save();

       Toastr::success(' Succesfull added . Login to Complete the profile  ', 'Success');
    }
}
