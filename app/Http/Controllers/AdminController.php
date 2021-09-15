<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Order;
use App\Models\Admin;
use Session;
use DB;


class AdminController extends Controller
{
  
    
    public function Dashboard()
    {
        return view('AdminDashboard');
    }

////************************************************** ADD & INSERT *************************************************************************////

    public function addProduct(){
        return view('AddProduct');
    }

    public function addAdmin(){
        return view('AddAdmin');
    }

    public function insertProduct(Request $requ){
      
         Product::create([
        'name'         => $requ -> name,
        'price'        => $requ -> price,
        'category'     => $requ -> category,
        'description'  => $requ -> description,
        'gallery'      => $requ -> gallery,

         ]);
         return redirect()->back();
        }

    public function insertAdmin(Request $requ){
      
            Admin::create([
           'name'         => $requ -> name,
           'email'        => $requ -> email,
           'password'     => $requ -> password,
           
            ]);
            return redirect()->back();
        }


////************************************************ SHOW ****************************************************************************////

        public function showProducts(){
            $products=Product::all();
            return view('AdminShowProducts',compact('products'));
            
        }

        public function showUsers(){
           
            $users=User::all();
            return view('AdminShowUsers',compact('users'));

        }

        public function showOrders(){
            $orders=Order::all();
            return view('AdminShowOrders',compact('orders'));
        }

        public function showAdmins(){
            $admins=Admin::all();
            return view('AdminShowAdmins',compact('admins'));
        }

////************************************************ DELETE *****************************************************************************/////

        public function deleteProduct($id){

                Product::destroy($id);
                 return redirect()->back();
        }

        public function deleteAdmin($id){

            Admin::destroy($id);
             return redirect()->back();
        }

        public function deleteOrder($id){

            Order::destroy($id);
             return redirect()->back();
        }

        public function deleteUser($id){

            User::destroy($id);
             return redirect()->back();
        }

        ////********************************************** UPDATE PRODUCT ************************************************************************************////
        
        public function getProduct($id){

           $products= Product::find($id);
           if(!$products)
           return redirect()->back();
    
           $products=product::select('id','name','price', 'description','gallery')->find($id);
           return view('UpdateProduct',compact('products'));
          }
   
        public function updateProduct(Request $request,$id){
 
           $products =product::find($id);
            if (!$products)
           return redirect()->back();
         
           $products->update($request->all());
           return redirect('admin/showproducts'); 
             }
       

        /////**************************************************UPDATE USER ROLES*********************************************************************************////

        // function to save update in the database by click button save //
        public function getUser($id){

           $users=User::select('id','name','email')->find($id);
           return view('UpdateUser',compact('users'));
          }
   
        public function updateUser(Request $request,User $user,$id){
            
           $user = User::find($id);
           $requestData = $request->except('email' , 'name');
           $user->update($requestData);
           $user->syncRoles($request->roles);

           return redirect('admin/showusers');

             }



    }



