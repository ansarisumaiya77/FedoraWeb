<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Gate;
use Session;
use App\project;
use App\projecttype;

class ProjectsController extends Controller
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
        $data = project::all();
        return view('projects.index', compact('data'));
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
        $data = projecttype::all();
        return view('projects.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new project();
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        $pro->projectname = $request->projectname;
        $pro->typeid = $request->typeid;
        $pro->size = $request->size;
        $pro->unit = $request->unit;
        $pro->price = $request->price;
        $pro->color = $request->color;
        $pro->image = $fileNameToStore;
        $pro->save();
        return redirect('/projects');
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
        $data = project::find($id);
        return view('projects.show', compact('data'));
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
        $data = project::find($id);
        $type = projecttype::all();
        return view('projects.edit', compact('data','type'));
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
        $pro = project::find($id);
        Session::put('image', $pro->image);
        $pro->projectname = $request->projectname;
        $pro->typeid = $request->typeid;
        $pro->size = $request->size;
        $pro->unit = $request->unit;
        $pro->price = $request->price;
        $pro->color = $request->color;
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
            $pro->image = $fileNameToStore;
        }
        else
        {
            $pro->image=Session('image');
        }
        $pro->save();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = project::find($id);
        $data->delete();
        return redirect('/projects');
    }
}
