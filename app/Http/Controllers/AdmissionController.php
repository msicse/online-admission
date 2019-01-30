<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('admission.home');
    }
    public function verify()
    {
        return view('admission.from.verify');
    }
    public function apply()
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
