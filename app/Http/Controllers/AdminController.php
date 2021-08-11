<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Product;

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
}
