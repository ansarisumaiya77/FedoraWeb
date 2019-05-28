<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\product;
use App\product_type;

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
    public function contact()
    {
        return view('home.contact');
    }
    public function shop()
    {
        $data = product::all();
        $type = product_type::all();
        return view('home.shop', compact('data','type'));
    }
    public function addtocart(Request $request, $id)
    {
        $pro = Product::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($pro, $pro->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('home.shop'); 
    }
}
