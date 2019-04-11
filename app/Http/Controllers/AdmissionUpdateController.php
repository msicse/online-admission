<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Programe;
use App\Academic;
use Carbon\Carbon;
use Session;
use Toastr;
use Storage;
use Image;
use Validator;

class AdmissionUpdateController extends Controller
{
    public function getPersonal()
    {
        $this->validate($request,array(
           'semester' => 'required|numeric',
           'year' => 'required|numeric',
           'shift' => 'required|numeric',
           'level' => 'required',
       ));

       
        return redirect()->route('admission.personal');
    }
}
