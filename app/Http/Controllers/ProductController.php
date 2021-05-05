<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('pages.shop',['data'=>$data]);
    }

    public function show($id)
    {
        $product_detail = Product::find($id);
        return view('pages.product-detail',['product_detail' => $product_detail]);
    }

    public function addToCart(Request $request)
    {   
        if($request->session()->has('user'))
        {
           $cart = new Cart;
           $cart->user_id = $request->session()->get('user')['id'];
           $cart->product_id = $request->product_id;
           $cart->save();
           return redirect('/shop');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        if(!empty(Session::get('user')['id']) ){
            $user_id = Session::get('user')['id'];
            return Cart::where('user_id',$user_id)->count();
        }
        return 0;
    }
}
