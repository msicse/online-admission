<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('admission.home');
    }
    public function applicationVerify()
    {
        return view('admission.from.verify');
    }
    public function applicationVerifySubmit(Request $request)
    {
        //return $request->all();
        //session(['apply' => $request->ssc_roll]);
        $request->session()->put('apply', $request->ssc_roll);

        $data = $request->session()->get('apply');

        

        return $data;
    }
    public function applicationForm()
    {
        return view('admission.from.app-form');
    }
    public function applicationSubmit()
    {
        return view('admission.from.app-form');
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
