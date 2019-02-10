<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Ssc;
use App\Hsc;
use Session;
use Toastr;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('admission.home');
    }
    public function applicationVerify()
    {
        //$application = $request->session()->get('application');
        //return view('products.create-step1',compact('product', $product));
        return view('admission.from.verify');
    }
    public function applicationVerifySubmit(Request $request)
    {
        //return $request->all();
        session(['apply' => $request->ssc_roll]);

        return $data
    }
    public function applicationForm()
    {
        $session_id = Session::get('application') - 34568876;

        if( $session_id == null ){

            Toastr::warning('', 'Success');

            return redirect()->route('admission.application.verify');
        } else {
            $ssc = Ssc::where('roll', $session_id)->first();
            return view('admission.from.app-form')->withSsc($ssc);
        }
        //return $session_data;

    }
    public function applicationSubmit(Request $request)
    {
        $session_id = Session::get('application') - 34568876;

        if( $session_id == null ){

            Toastr::error('Access Denied', 'Error');

            return redirect()->route('admission.application.verify');
        } else {

            $this->validate($request,array(
               'semester' => 'required|numeric',
               'year' => 'required|numeric',
               'program' => 'required|numeric',
               'phone' => 'required',
               'email' => 'required|numeric',
               'guardian' => 'required',
               'guardian_relation' => 'required',
               'present_address' => 'required|numeric',
               'parmanent_address' => 'required',
               'image' => 'required|image|mimes:jpeg,png',
           ));

           $application = new Application;


            return view('admission.from.app-form')->withSsc($ssc);
        }
    }
    public function login()
    {
        return view('admission.login');
    }
    public function guideline()
    {
        return view('admission.login');
    }
    public function complain()
    {
        return view('admission.login');
    }
}
