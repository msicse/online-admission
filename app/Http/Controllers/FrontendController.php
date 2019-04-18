<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function message()
    {
        return view('frontend.pages.message');
    }



    public function contact()
    {
    return view('frontend.pages.contact');
    }


    public function certification(){

        return view('frontend.pages.certification');

    }

    public function mission(){

        return view('frontend.pages.mission');

    }

    public function rules(){

        return view('frontend.pages.rules');

    }

    public function degrees(){

        return view('frontend.pages.degrees');

    }

    public function credit(){

        return view('frontend.pages.credit');

    }
    public function guideline(){

        return view('frontend.pages.guideline');

    }
    public function tuition(){

        return view('frontend.pages.tuition');

    }
    public function registration(){

        return view('frontend.pages.registration');

    }

    public function office(){

        return view('frontend.pages.office');

    }
    public function business(){

        return view('frontend.pages.business');

    }
    public function arts(){

        return view('frontend.pages.arts');

    }
    public function engineering(){

        return view('frontend.pages.engineering');

    }
}
