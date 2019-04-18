<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Application;
use App\Programe;
use App\Department;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index (){
        $dt = Carbon::toDay();
        $applications = Application::all();
        $newApplications = Application::whereDate('created_at', $dt)->get();
        $pendings = Application::where('approved',false)->get();
        $approved = Application::where('approved',true)->count();
        $departments = Department::all()->count();
        $programs = Programe::all()->count();
        return view('backend.admin.dashboard')->with(compact('applications', 'newApplications', 'pendings', 'approved', 'departments', 'programs'));
    }
}
