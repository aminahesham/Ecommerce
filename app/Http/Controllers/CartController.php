<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class CartController extends Controller
{
// add products to cart
    public function addToCart(Request $req){
        if ($req -> Session()->has('user')){
            $cart = new Cart;
            $cart -> user_id = $req -> Session()->get('user')['id'];
            $cart -> product_id = $req -> product_id;
            $cart ->save();
            return redirect('allproducts');
        }else{
            return redirect()->back();
        }
        
    }

// display the number of cart items 
    static function cartItem(){
        $userid =Session()->get('user')['id'];
        return Cart::where('user_id' , $userid)-> count();
    }

// display products in cart     
    public function cartList(){
        $userid = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products' , 'cart.product_id' , '=' , 'products.id')
        ->where('cart.user_id' , $userid)
        ->select('products.*' , 'cart.id as cart_id' )
        ->get();
        return view('Products/CartList' , ['products' => $products]);
    }

// delete product from cart    
    public function cartDelete($id){
       Cart::destroy($id);
        return redirect('cartlist');
    }
}
