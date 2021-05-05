<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [];
        if(!empty(Session::get('user'))){
            $userId=Session::get('user')['id'];

            $products= DB::table('carts')
                ->join('products','carts.product_id','=','products.id')
                ->where('carts.user_id',$userId)
                ->select('products.*','carts.id as cart_id')
                ->get();

        }
        
        return view('pages.cart',['products'=>$products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    public function checkout()
    {
        $total = 0;
        if(!empty(Session::get('user'))){
            $userId = Session::get('user')['id'];
            $total  = DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$userId)
            ->sum('price');
        }
        
 
        return view('pages.checkout',['total'=>$total]);
    }
    public function order(Request $request)
    {
        $userId  = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();

            Cart::where('user_id',$userId)->delete(); 
        }
        $request->input();
        return redirect('/');
    }
    public function orderDetail()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('pages.order-detail',['orders'=>$orders]);
    }
}
