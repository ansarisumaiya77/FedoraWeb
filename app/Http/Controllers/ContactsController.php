<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
use App\contact;
use Gate;

class ContactsController extends Controller
{
    public function contact()
    {
        return view('home.contact');
    }
    public function postcontact(Request $request)
    {
        $con = new contact();
        $con->username = $request->username;
        $con->email = $request->email;
        $con->message = $request->message;
        $con->save();
        return redirect('/contact');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = contact::all();
        return view('contact.index', compact('data'));
    }
    public function sendemail(Request $request)
    {
        // $this->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);
        $data = array(
            'message' => $request->message
        );
        Mail::to($request->email)->send(new sendmail($data));
        return back();

        //return $request;
    }
}
