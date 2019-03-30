<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('backend.admin.admission.index')->withApplications($applications);
    }

    public function show($id)
    {
        $application = Application::find($id);
        return view('backend.admin.admission.show')->withApplication($application);
    }
}
