<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projecttype;
use Gate;

class ProjectTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = projecttype::all();
        return view('projectType.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        return view('projectType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new projecttype;
        $data->type = $request->type;
        $data->save();
        return redirect('/projecttypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = projecttype::find($id);
        return view('projectType.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin'))
        {
            abort("404", "Sorry page you've requested not found");
        }
        $data = projecttype::find($id);
        return view('projectType.edit', compact('data'));
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
        $data = projecttype::find($id);
        $data->type = $request->type;
        $data->save();
        return redirect('/projecttypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = projecttype::find($id);
        $data->delete();
        return redirect('/projecttypes');
    }
}
