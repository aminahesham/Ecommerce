<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
//show order table in dashboard
    public function showOrders(){
        $orders=Order::all();
        return view('Orders/AdminShowOrders',compact('orders'));
    }

    
//delete order from database 
    public function deleteOrder($id){

    Order::destroy($id);
     return redirect()->back();
}

//user confirm order
public function confirmOrder(){
    $userid = Session::get('user')['id'];
    $total = Db::table('cart')
    ->join('products' , 'cart.product_id' , '=' ,'products.id')
    ->where('cart.user_id' , $userid)
    ->sum('products.price');

    return view('Orders/ConfirmOrders' , ['total' => $total]);

}

//user show all his confirmed orders
public function myOrders(){
    $userid = Session::get('user')['id'];
    $orders = Db::table('orders')
    ->join('products' , 'orders.product_id' , '=' ,'products.id')
    ->where('orders.user_id' , $userid)
    ->get();

    return view('Orders/MyOrders' , ['orders' => $orders]);
}

//save order in database
public function saveOrder(Request $req){
    $userid = Session::get('user')['id'];
    $allorders = Cart::where('user_id' , $userid)->get();

    foreach($allorders as $cart){
        $order = new Order;
        $order -> product_id = $cart['product_id'];
        $order -> user_id = $cart['user_id'];
        $order -> payment_method = $req -> payment;
        $order -> address = $req -> address;
        $order -> phone = $req -> phone;
        $order -> save();

        Cart::where('user_id' , $userid)->delete();
    }
    
    $req -> input();
    return redirect('/home');

}
  
}
