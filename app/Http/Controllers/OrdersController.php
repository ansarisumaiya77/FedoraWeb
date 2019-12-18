<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\order;
use App\status;
use App\ordersdetail;
use Gate;

class OrdersController extends Controller
{
    public function index()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::all();
        return view('orders.index', compact('data'));
    }
    public function detail($id)
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = ordersdetail::where('orderid',$id)->get();
        return view('orders.detail', compact('data'));
    }
    public function new()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::where('statusid','1')->get();
        return view('orders.index', compact('data'));
    }
    public function confirmed()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::where('statusid','2')->get();
        return view('orders.index', compact('data'));
    }
    public function rejected()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::where('statusid','3')->get();
        return view('orders.index', compact('data'));
    }
    public function inprocess()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::where('statusid','4')->get();
        return view('orders.index', compact('data'));
    }
    public function completed()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = order::where('statusid','5')->get();
        return view('orders.index', compact('data'));
    }
    public function edit($id)
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $item = order::find($id);
        $status = status::all();
        return view('orders.edit', compact('item', 'status'));
    }
    public function update($id, Request $request)
    {
        $item = order::find($id);
        $item->statusid = $request->status;
        $item->save();
        return redirect('/order/index');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function order()
    {
        try
        {
            $id = Auth::user()->id;
            $data = order::where('userid',$id)->orderby('created_at', 'desc')->first();
            if ($data) {
                $detail = ordersdetail::where('orderid', $data->id)->get();
            }
            else {
                $data = null;
                $detail = null;
                // dd($detail);
            }
            // dd($data);
            // dd($detail);
            return view('orders.order', compact('data', 'detail'));
    
        }
        catch(Exception $ex)
        {
            $data = 0;
            $detail = 0;
            return view('orders.order', compact('data', 'detail'));
        }
        // dd($data);
    }

}
