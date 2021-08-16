<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    
    public function search(Request $req){
        $data = Product :: where('name' , 'like' , '%' . $req -> input('query').'%') -> get();
        return view('search' , ['products' => $data]);

    }

    ////***************************************PRODUCTS**************************************************////
    public function showproducts(){
        $data =Product :: all();
        return view('Product' , ['products' => $data]);
    }

    public function productdetails($id){
        $data =Product :: find($id);
        return view('Productdetails' , ['products' => $data]);
    }

    ////**************************************CART**************************************************////
    public function addtocart(Request $req){

        if ($req -> Session()->has('user')){
            $cart = new Cart;
            $cart -> user_id = $req -> Session()->get('user')['id'];
            $cart -> product_id = $req -> product_id;
            $cart ->save();
            return redirect('products');
        }else{
            return redirect()->back();
        }
    }

    static function cartitem(){
        $userid =Session()->get('user')['id'];
        return Cart::where('user_id' , $userid)-> count();
    }

    public function cartlist(){
        $userid = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products' , 'cart.product_id' , '=' , 'products.id')
        ->where('cart.user_id' , $userid)
        ->select('products.*' , 'cart.id as cart_id' )
        ->get();
        return view('CartList' , ['products' => $products]);
    }

    public function cartdelete($id){

       Cart::destroy($id);
        return redirect('/cartlist');
    }

    ////*********************************ORDERS*********************************** */

    public function confirmorder(){
        $userid = Session::get('user')['id'];
        $total = Db::table('cart')
        ->join('products' , 'cart.product_id' , '=' ,'products.id')
        ->where('cart.user_id' , $userid)
        ->sum('products.price');

        return view('ConfirmOrders' , ['total' => $total]);
    
    }
    public function myorders(){
        $userid = Session::get('user')['id'];
        $orders = Db::table('orders')
        ->join('products' , 'orders.product_id' , '=' ,'products.id')
        ->where('orders.user_id' , $userid)
        ->get();

        return view('MyOrders' , ['orders' => $orders]);
    }

    public function saveorder(Request $req){
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

