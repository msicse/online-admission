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
}
