<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;



class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('AdminDashboard');
    }

    public function showproducts(){
        $products=Product::all();
        return view('AdminShowProducts',compact('products'));
    }

    public function addproduct(){
        return view('AddProduct');
    }

    public function insertproduct(Request $requ){
      
         Product::create([
        'name'         => $requ -> name,
        'price'        => $requ -> price,
        'category'     => $requ -> category,
        'description'  => $requ -> description,
        'gallery'      => $requ -> gallery,

         ]);
         return redirect()->back();
        }

        public function showusers(){
            $users=User::all();
            return view('AdminShowUsers',compact('users'));
        }

        public function showorders(){
            $orders=Order::all();
            return view('AdminShowOrders',compact('orders'));
        }
}
