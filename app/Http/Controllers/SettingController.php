<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Toastr;

class SettingController extends Controller
{
    public function index()
    {
        return view('backend.setting');
    }
    public function updatePass(Request $request)
    {
        $this->validate($request, array(
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ));
        //Hash::make($password)
        $user = User::find(Auth::user()->id);


        if(Hash::check($request->old_password, $user->password)) {
            $user->password   = Hash::make($request->password);
            $user->save();
            Toastr::success(' Succesfully Change Your Password ', 'Success');
            return redirect()->back();
        } else {
            Toastr::error(' Your Password do not Match', 'Error');
            return redirect()->back();
        }

    }
}
