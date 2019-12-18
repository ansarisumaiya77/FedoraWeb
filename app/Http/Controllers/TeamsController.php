<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\team;
use App\teamdetail;
use App\User;
use App\assignproject;

class TeamsController extends Controller
{
    public function index()
    {
        $data = team::all();
        return view('teams.index', compact('data'));
    }
    public function getemployees()
    {
        return User::select("id","firstname")->where("user_type","Employee")->get();
    }
    public function create()
    {
        // $emp = User::where('user_type','Employee')->get();
        // dd($data);
        $data = DB::select(DB::raw("select * from users where User_type = 'Employee' and  id not in (select employeeid from teamdetails)"));
        return view('teams.create', compact('data'));
    }
    public function store(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $team = new team();
            $team->name = $request->name;
            $team->leadname = $request->leadname;
            $team->description = $request->description;
            $team->save();
            if($team)
            {
                $data = DB::table('teams')->where('name',$request->name)->get();
                $detail = new teamdetail();
                foreach ($request->employee as $i=> $item)
                {
                    $emp = User::find($item);
                    $name = $emp->firstname.' '.$emp->lastname;
                    // dd($name);
                    $batch = [
                        'teamid' => $data[0]->id, 
                        'employeeid' => $item,
                        //dd($request->id->leadname);
                        'role' => $name == $request->leadname ? 'Leader':'Worker', 
                        'created_at' => date("Y-m-d H:i:s"), // now
                        'updated_at' => date("Y-m-d H:i:s"), // now
                    ];
                    DB::table('teamdetails')->insert($batch);
                }
            }
            DB::commit();
            return redirect('/teams');    
        }
        catch(Exception $ex)
        {
            dd('Team did not create due to some malfuntioning in your code');
        }
    }

    public function edit($id)
    {
        $data = team::find($id);
        $detail = teamdetail::where('teamid', $id)->get();
        $emp = User::where('user_type','Employee')->get();
        $addemp = DB::select(DB::raw("select * from users where User_type = 'Employee' and  id not in (select employeeid from teamdetails)"));
        return view('teams.edit', compact('data', 'detail', 'emp', 'addemp'));
    }

    public function addemployee(Request $request)
    {
        $team = $request->teamid;
        $emp = new teamdetail();
        $emp->teamid = $team;
        $emp->employeeid = $request->employee;
        $emp->role = "Worker";
        $emp->save();
        return redirect("teams/".$team."/edit");
    }

    public function deleteemployee($id, Request $request)
    {
        $emp = teamdetail::find($id);
        $emp->delete();
        $team = $request->teamid;
        return redirect("teams/".$team."/edit");
    }
    public function updateemployee($id, Request $request)
    {
        $emp = teamdetail::find($id);
        $emp->employeeid = $request->employee;
        $emp->role = $request->role;
        $emp->save();
        $team = $request->teamid;
        return redirect("teams/".$team."/edit");
    }


    public function update($id, Request $request)
    {
        $emp = team::find($id);
        $emp->name = $request->name;
        $emp->leadname = $request->leadname;
        $emp->description = $request->description;
        $emp->save();
        return redirect("teams/'.$id.'/edit");

    }
    
    public function detail($id)
    {
        $data = team::find($id);
        $detail = teamdetail::where('teamid', $id)->get();
        return view('teams.detail', compact('data', 'detail'));
    }

    public function delete($id)
    {
        $detail = teamdetail::where('teamid', $id)->get();
        $delete = "";
        foreach ($detail as $key => $value) {
            $det = teamdetail::find($value->id);
            if ($det->delete()) {
                $delete = "Yes";
            }
            
        }
        $assign = assignproject::where('teamid', $id)->get();
        foreach ($assign as $key => $value) {
            $val = assignproject::finf($value->id)->get();
            $val->delete();
        }
        

        if ($delete) {
            $data = team::find($id);
            $data->delete();
        }
        
        return redirect('/teams');
    }

}
