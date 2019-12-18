<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use app\User;
use Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // protected function validator(array $request)
    // {
    //     return Validator::make($request, [
    //         'firstname' => ['required', 'string', 'max:255'],
    //         'lastname' => ['required', 'string', 'max:255'],
    //         'contact' => ['required', 'string', 'size:13'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }


    public function index()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('profile.index', compact('data'));
    }
    public function name($id, Request $request)
    {
        $data = User::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->save();
        return redirect('/profile');

    }
    public function contact($id, Request $request)
    {
        $data = User::find($id);
        $data->contact = $request->contact;
        $data->save();
        return redirect('/profile');

    }
    public function email($id, Request $request)
    {
        $data = User::find($id);
        $data->email = $request->email;
        $data->save();
        return redirect('/profile');

    }
    public function password($id, Request $request)
    {
        $data = User::find($id);
        $password = Hash::make($request['oldpassword']);
        dd($password);
        if ($data->password == $password) {
            $data->password = $password;
            $data->save();
            return redirect('/profile');
        } else {
            # code...
        }
        
        


    }
}
