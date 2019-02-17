<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Notifications\NewUser;
use App\User;
use App\Role;
use Toastr;

use Storage;
use Carbon\Carbon;
use Image;
use Notification;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('backend.admin.user')->withUsers($users)->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'role' => 'required|integer',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'about' => 'string',
            'image' => 'mimes:jpg,jpeg,bmp,png,gif',
        ));
        $image = $request->file('image');
        $slug  = str_slug($request->input('name'));
        if (isset($image)){
            if (!Storage::disk('public')->exists('users')){
                Storage::disk('public')->makeDirectory('users');
            }
            $date = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $userImage = Image::make($image)->resize(400, 400)->save($image->getClientOriginalExtension());

            Storage::disk('public')->put('users/'.$imagename, $userImage);


        } else {
            $imagename = 'default.png';
        }
        $password = 123456; //str_random(6);

        $user = new User;
        $user->role_id     = $request->input('role');
        $user->name     = $request->input('name');
        $user->email     = $request->input('email');
        $user->about     = $request->input('about');
        $user->image     = $imagename;
        $user->password  = Hash::make($password);
        $user->save();

        Notification::send($user, new NewUser($user));

        Toastr::success(' Succesfully Created User ', 'Success');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
