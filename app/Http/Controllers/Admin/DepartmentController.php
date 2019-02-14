<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use Toastr;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();

        return view('backend.admin.department')->withDepartments($departments);
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
            'name' => 'required|max:255|unique:departments',
            'short_name' => 'required|max:255|unique:departments',

        ));
        //return $request->all();

        $slug  = str_slug($request->input('short_name'));

        $department = new Department;
        $department->name = $request->input('name');
        $department->short_name = $request->input('short_name');
        $department->slug = $slug;
        $department->status = true;
        $department->save();
        Toastr::success('Department Succesfully Added ', 'Success');
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
        $department = Department::find($id);
        return $department;
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
            'name' => 'required|max:255|unique:departments,id,'.$id,
            'short_name' => 'required|max:255|unique:departments,id,'.$id,

        ));
        //return $request->all();

        $slug  = str_slug($request->input('short_name'));

        $department = Department::find($id);
        $department->name = $request->input('name');
        $department->short_name = $request->input('short_name');
        $department->slug = $slug;
        $department->status = true;
        $department->save();
        Toastr::success('Department Succesfully Updated ', 'Success');
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
        $dept = Department::find($id);

        $dept->delete();

        Toastr::success(' Succesfully Deleted ', 'Success');
        return redirect()->back();
    }
}
