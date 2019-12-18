<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Cart;
use App\project;
use App\projecttype;
use App\product;
use App\product_type;
use App\team;
use App\teamdetail;
use App\projectfeedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function services()
    {
        return view('home.services');
    }
    public function faq()
    {
        return view('home.faq');
    }

    public function shop()
    {
        $data = product::latest()->paginate(6);
        $type = product_type::all();
        return view('home.shop', compact('type', 'data'))
                    ->with('i', (request()->input('page',1) -1)*6);
    }
    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('products')->paginate(6);
            return view('home.shop', compact('data'))->render();
        }
    }
    public function shopcategory($id)
    {
        $data = DB::table('products')->where('producttypeid',$id)->latest()->paginate(6);
        $type = product_type::all();
        // return view('home.shop', compact('data','type'));
        return view('home.shop', compact('type', 'data'))
                    ->with('i', (request()->input('page',1) -1)*6);
    }
    public function productdetail($id)
    {
        $pro = Product::find($id);
        return view('home.productdetail', compact('pro')); 
    }

    public function project()
    {
        $data = project::latest()->paginate(6);
        $type = projecttype::all();
        return view('home.project', compact('data','type'))
                     ->with('i', (request()->input('page',1) -1)*6);
    }
    public function projectcategory($id)
    {
        $data = DB::table('projects')->where('typeid',$id)->latest()->paginate(6);
        $type = projecttype::all();
        return view('home.project', compact('data','type'))
                    ->with('i', (request()->input('page',1) -1)*6);
    }
    public function projectdetail($id)
    {
        $pro = Project::find($id);
        return view('home.projectdetail', compact('pro')); 
    }
    public function feedback()
    {
        return view('home.feedback'); 
    }
    public function feedbackpost(Request $request)
    {
        $fb = new projectfeedback();
        $fb->visitorsname = $request->visitorsname;
        $fb->organizatonname = $request->organizatonname;
        $fb->contact = $request->contact;
        $fb->email = $request->email;
        $fb->remarks = $request->remarks;
        $fb->save();
        return redirect('/feedback'); 
    }

    public function assignproject()
    {
        // $id = Auth::user()->id;
        // $team = teamdetail::where('employeeid', $id)->get();
        // $teamid = $team->teamid;
        // dd($teamid);
        return view('home.assignproject'); 
    }
    
}
