<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\project;
use App\status;
use Auth;
use Gate;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function form($id)
    {
        $data = $id;
        return view('booking.booking', compact('data'));
    }
    public function booking(Request $request)
    {
        $id = $request->id;
        $pro = project::find($id);
        $booking = new booking();
        $booking->customerid = Auth::user()->id;
        $booking->projectid = $id;
        $booking->size = $request->size;
        $booking->address = $request->address;
        $booking->email = Auth::user()->email;
        $booking->contact = Auth::user()->contact;
        $booking->customername = $request->name;
        $booking->price = $request->size * $pro->price;
        $booking->statusid = "1";
        $booking->save();
        return redirect('/project');
    }
    public function index()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::all();
        return view('booking.index', compact('data'));
    }
    public function new()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::where('statusid','1')->get();
        //dd($data);
        return view('booking.index', compact('data'));
    }
    public function confirmed()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::where('statusid','2')->get();
        //dd($data);
        return view('booking.index', compact('data'));
    }
    public function rejected()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::where('statusid','3')->get();
        //dd($data);
        return view('booking.index', compact('data'));
    }
    public function inprocess()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::where('statusid','4')->get();
        //dd($data);
        return view('booking.index', compact('data'));
    }
    public function completed()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = booking::where('statusid','5')->get();
        //dd($data);
        return view('booking.index', compact('data'));
    }
    public function edit($id)
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $item = booking::find($id);
        $status = status::all();
        return view('booking.edit', compact('item', 'status'));
    }
    public function update($id, Request $request)
    {
        $item = booking::find($id);
        $item->statusid = $request->status;
        $item->save();
        return redirect('/booking/index');
    }

}
