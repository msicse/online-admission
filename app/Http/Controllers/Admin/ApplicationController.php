<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Application;
use App\Programe;

use DB;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::where('year', date('Y'))
                                    ->where('approved',false )
                                    ->get();
        return view('backend.admin.admission.index')->withApplications($applications);
    }

    public function show($id)
    {
        $application = Application::find($id);
        return view('backend.admin.admission.show')->withApplication($application);
    }
    public function applicationApproved($id)
    {
        $application = Application::find($id);
        $result = 0;
        foreach($application->academics as $data){
            $result = $result + $data->result;
        }
        return $result;
        $application->approved = 1;
        $application->result = $result;
        $application->save();
        return view('backend.admin.admission.show')->withApplication($application);
    }

    public function getResult()
    {
        
        $programs = Programe::all();
        $springs = Application::where('approved', true)
                                ->where('level', 1)
                                ->where('semester', 2)
                                ->where('shift', 1)
                                ->where('year', date('Y')+1)
                                ->orderBy('result', 'desc')
                                ->get();
  
                                //dd ($springs);

        $summers = Application::where('approved', true)
                                ->where('level', 1)
                                ->where('shift', 2)
                                ->where('semester', 2)
                                ->where('year', date('Y'))
                                ->get();

        // $users = DB::table('applications')
        //     ->join('academics', 'applications.id', '=', 'academics.application_id')
        //     //->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('applications.*', DB::raw('sum(academics.result) as fresult'))
        //     ->get();

                               // return $users;
        // $falls = Application::where('approved', true)
        //                         ->where('level', 1)
        //                         ->where('semester', 2)
        //                         ->where('year', date('Y'))
        //                         ->get();

        return view('backend.admin.admission.result')->with( compact('springs', 'summers', 'falls','programs'));
    }
}
