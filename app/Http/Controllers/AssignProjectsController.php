<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assignproject;
use App\booking;
use App\team;
use Session;
use DB;

class AssignProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = assignproject::all();
        return view('assignproject.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = DB::select(DB::raw("select * from bookings where statusid = 2 and id not in (select bookingid from assignprojects)"));
        $team = DB::select(DB::raw("select * from teams where id not in (select teamid from assignprojects)"));
        return view('assignproject.create', compact('booking', 'team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assign = new assignproject();
        $assign->bookingid = $request->bookingid;
        $assign->teamid = $request->teamid;
        $assign->startingdate = $request->startingdate;
        $assign->endingdate = $request->endingdate;
        $assign->save();
        return redirect('/assignprojects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assign = assignproject::find($id);
        return view('assignproject.show', compact('assign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assign = assignproject::find($id);
        $booking = booking::all();
        $team = team::all();
        return view('assignproject.edit', compact('booking', 'team','assign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $assign = assignproject::find($id);
        Session::put('bookingid', $assign->bookingid);
        Session::put('teamid', $assign->teamid);
        Session::put('startingdate', $assign->startingdate);
        Session::put('endingdate', $assign->endingdate);
        if ($request->bookingid) {
            $assign->bookingid = $request->bookingid;
        } else {
            $assign->bookingid = Session('bookingid');
        }
        if ($request->teamid) {
            $assign->teamid = $request->teamid;
        } else {
            $assign->teamid = Session('teamid');
        }
        if ($request->startingdate) {
            $assign->startingdate = $request->startingdate;
        } else {
            $assign->startingdate = Session('startingdate');
        }
        if ($request->endingdate) {
            $assign->endingdate = $request->endingdate;
        } else {
            $assign->endingdate = Session('endingdate');
        }
        $assign->save();
        return redirect('/assignprojects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign = assignproject::find($id);
        $assign->delete();
        return redirect('/assignproject');
    }
}
