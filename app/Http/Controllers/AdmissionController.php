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
                 ->first();
       $hsc = Hsc::where('roll',$request->hsc_roll)
                 ->where('reg',$request->hsc_reg)
                 ->where('passing_year',$request->hsc_year)
                 ->where('board',$request->hsc_board)
                 ->first();

       if ( $ssc === null ) {
           Toastr::error('Your SSC information not found', 'Error');
           return redirect()->back();
       }else if ( $hsc === null ) {
            Toastr::error('Your HSC information not found', 'Error');
            return redirect()->back();
        }else {
            $session = 34568876 + $ssc->id;
            Session::put('application', $session);
        }

        return redirect()->route('admission.application.form');
        
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
    public function applicationForm()
    {
        $session_id = Session::get('application') - 34568876;
        if( $session_id == null ){

            Toastr::warning('nbhbhbhb', 'Success');

            return redirect()->route('admission.application.verify');
        } else {
            $ssc = Ssc::find($session_id);
            return view('admission.from.app-form')->withSsc($ssc);
        }
        //return $session_data;

    }
    public function applicationSubmit(Request $request)
    {
        //$session_id = Session::get('application');
        $session_id = Session::get('application') - 34568876;

        //return $session_id;
        //Session::forget('application');
        return redirect()->route('admission.application.verify');
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
