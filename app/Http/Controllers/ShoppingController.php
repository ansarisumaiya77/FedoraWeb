<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\order;
use Auth;
use Gate;
use App\ordersdetail;
use App\product;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    public function addtocart(Request $request, $id)
    {
        $pro = Product::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($pro, $pro->id);

        $request->session()->put('cart', $cart);
        return redirect('/shop');
    }

    public function getIncreaseByOne($id)
    {
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->increaseByOne($id);

        Session::put('cart', $cart);
        return redirect('/cart');
    }
    public function getReduceByOne($id)
    {
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->reduceByOne($id);

        if(count($cart->items)>0)
        {
            Session::put('cart', $cart);
            return redirect('/cart');
        }
        else
        {
            Session::forget('cart');
            return redirect('/cart');
        }
    }
    public function getRemoveItem($id)
    {
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->removeItem($id);

        if(count($cart->items)>0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }     
        return redirect('/cart');
    }

    public function cart()
    {
        if(!Session::has('cart'))
        {
            return view('shopping.cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shopping.cart', ['products'=> $cart->items, 'price'=> $cart->price]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout()
    {
        if(!Session::has('cart'))
        {
            return redirect('/shop');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $total = $cart->price;
        //return $total;
        return view('shopping.checkout',compact(['total']));
    }

    public function postcheckout(Request $request)
    {
        if(!Session::has('cart'))
        {
            return redirect('/cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        
        Stripe::setApiKey('sk_test_KECXD5PELCpKcuOKHxFz6uBU00EKqOgJ3c');
        try
        {
            // return $request;
            $charge = Charge::create(array(
                'amount'=> $cart->price,
                'currency'=> 'usd',
                'source'=> $request->input('stripeToken'),
                'description'=>'Test Charges'
            ));
            
            DB::beginTransaction();
            $order = new Order();
            $order->userid = Auth::user()->id;
            $order->customername = $request->name;
            $order->payment = $cart->price; 
            $order->paymentid = $request->input('stripeToken');
            $order->address = $request->address;
            $order->statusid = 1;
            $order->save();
            // $data = Auth::user()->orders()->save($order);
            if($order)
            {
                $data = DB::table('orders')->where('paymentid',$request->input('stripeToken'))->first();
                $detail = new ordersdetail();
                // $detail->orderid = $data->id;
                // $detail->cart = $request->cart;
                // dd($cart);
                // return "";
                foreach ($cart->items as $i=> $item)
                {
                    // dd($item["item"]);
                    // return "";
                    $batch = [
                        'orderid' => $data->id, 
                        'productid' => $item["item"]->id,
                        'price' => $item["price"], 
                        'quantity' =>$item["qty"],
                        'created_at' => date("Y-m-d H:i:s"), // now
                        'updated_at' => date("Y-m-d H:i:s"), // now
                    ];
                    DB::table('ordersdetails')->insert($batch);
                    $pro = product::find($item["item"]->id);
                    $pro->quantity = $pro->quantity-$item["qty"];
                    $pro->save();
                }
            }
            DB::commit();
         }
        catch(Exception $ex)
        {
            DB::rollBack();
            return redirect('/checkout')->with('error', $ex->getMessage());
        }
        Session::forget('cart');
        return redirect('/shop')->with('success', 'Successfully Purchased Products');
    }
}
