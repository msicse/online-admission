<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Toastr;


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

    public function postContact(Request $request)
    {

        //return $request->all();

        $this->validate($request, [
            'name'=>'required|min:3',
            'phone'=>'required|min:3',
            'subject'=>'required|min:3',
            'email'=>'required|email',
            'msg'=>'required|min:10'
        ]);

        $data = array(
            'name'   => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'bodyMessage' => $request->msg
        );


        Mail::send('emails.contact', $data , function ($message) use ($data){

                $message->from($data['email']);
                $message->to('7db34073e3-91f7af@inbox.mailtrap.io');
                $message->subject($data['subject']);
        });
        Toastr::success(' Succesfully Send Message ', 'Success');
        return redirect()->back();
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
