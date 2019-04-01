<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programe;
use App\Department;
use Toastr;

class ProgrameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Programe::all();
        $departments = Department::all();

        return view('backend.admin.programe')->withPrograms($programs)->withDepartments($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'department' => 'required|integer',
            'name' => 'required|max:255|unique:programes',
            'short_name' => 'required|max:255|unique:programes',

        ));
        //return $request->all();

        $slug  = str_slug($request->input('short_name'));

        $program = new Programe;
        $program->department_id = $request->input('department');
        $program->name = $request->input('name');
        $program->short_name = $request->input('short_name');
        $program->seat = $request->input('seat');
        $program->level = $request->input('level');
        $program->slug = $slug;
        $program->status = true;
        $program->save();
        Toastr::success(' Succesfully Added ', 'Success');
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
        $program = Programe::find($id);
        return $program;
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
        $this->validate($request,array(
            'department' => 'required|integer',
            'name' => 'required|max:255|unique:programes,id,'.$id,
            'short_name' => 'required|max:255|unique:programes,id,'.$id,

        ));
        //return $request->all();

        $slug  = str_slug($request->input('short_name'));

        $program = Programe::find($id);
        $program->department_id = $request->input('department');
        $program->name = $request->input('name');
        $program->short_name = $request->input('short_name');
        $program->slug = $slug;
        $program->status = true;
        $program->save();
        Toastr::success(' Succesfully Updated ', 'Success');
        return redirect()->back();
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
