<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Application;
use Auth;
use Toastr;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('frontend.application.home');
    }

    public function getPassword()
    {
        return view('frontend.application.change-password');
    }

    public function postPassword(Request $request)
    {
        //return $request->all();

        $this->validate($request,array(
            'old_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed',

        ));

        $app = Application::find(Auth::guard('application')->user()->id);

        //return $password;
        if (Hash::check($request->old_password, $app->password)) {
            $app->password = Hash::make($request->password);
            $app->save();
            Toastr::success("Successfully Updated Your Password", 'Success');
            return redirect()->back();

        } else{

            //return 'not';
            Toastr::error("Old Password don't match ", 'Error');
            return redirect()->back();
        }

    }
    public function info()
    {
        $application = Application::find(Auth::guard('application')->user()->id);
        //$application = Application::find(2);
        return view('frontend.application.info')->withApplication($application);

    }
}
