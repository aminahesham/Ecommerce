<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    public function homeShowProducts(){
        $data =Product :: all();
        return view('Products/Product' , ['products' => $data]);
    }

    public function allProducts(){
        $data =Product :: all();
        return view('Products/AllProducts' , ['products' => $data]);
    }

    public function productDetails($id){
        $data =Product :: find($id);
        return view('Products/Productdetails' , ['products' => $data]);
    }

    public function Search(Request $req){
        $data = Product :: where('name' , 'like' , '%' . $req -> input('query').'%') -> get();
        return view('Products/search' , ['products' => $data]);

    }

//seller user add new product 
    public function userAddProduct(){
        return view('Products/UserAddProduct');
    }
//show products table in dashboard
    public function showProducts(){
        $products=Product::all();
        return view('Products/AdminShowProducts',compact('products'));
        
    }
//add new product in dashboard
    public function addProduct(){
        return view('Products/AddProduct');
    }
//save product in database
    public function insertProduct(Request $requ){
      
         Product::create([
        'name'         => $requ -> name,
        'price'        => $requ -> price,
        'description'  => $requ -> description,
        'photo'        => $requ -> photo,

         ]);
         return redirect()->back();
        }

//save product in database
    public function userInsertProduct(Request $requ){
      
        Product::create([
       'name'         => $requ -> name,
       'price'        => $requ -> price,
       'description'  => $requ -> description,
       'photo'        => $requ -> photo,

        ]);
        return redirect()->back();
       }
        
//get product to update 
    public function getProduct($id){

            $products= Product::find($id);
            if(!$products)
            return redirect()->back();
     
            $products=product::select('id','name','price', 'description','photo')->find($id);
            return view('Products/UpdateProduct',compact('products'));
           }
//save updated product
    public function updateProduct(Request $request,$id){
  
            $products =product::find($id);
             if (!$products)
            return redirect()->back();
          
            $products->update($request->all());
            return redirect('showproducts'); 
              }

//delete product from database
    public function deleteProduct($id){

            Product::destroy($id);
                return redirect()->back();
        }

        

       
   
}
