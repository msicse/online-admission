<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ApplicationLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/student';

    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
     return Auth::guard('application');
    }

    // login from for teacher
    public function showLoginForm()
    {
        return view('frontend.admission.login');
    }

    public function logout( Request $request)
    {
        Auth::guard('application')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'admission.login' ));
    }
}
