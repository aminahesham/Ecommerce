<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;

use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
{
    //
    public function homeView(){
        return view('Home');
    }
//show users table in dashboard
    public function showUsers(){
       
        $users=User::all();
        return view('Users/AdminShowUsers',compact('users'));

    }

//get user to update it     
    public function getUser($id){

        $users=User::select('id','name','email')->find($id);
        return view('Users/UpdateUser',compact('users'));
       }

//save updated user in database
     public function updateUser(Request $request,User $user,$id){
         
        $user = User::find($id);
        $requestData = $request->except('email' , 'name');
        $user->update($requestData);
        $user->syncRoles($request->roles);
        $user->syncPermissions($request->permissions);


        return redirect('showusers');

          }

//redirect users and admins by roles
    public function redirect(){

            $role = Auth :: user();
    
            if($role->hasRole('admin')){
    
                return view('dashboard');
            }
            else{
                return view('home');
            }
        }
    
//delete user from database
    public function deleteUser($id){

        User::destroy($id);
         return redirect()->back();
    }
    
//seller user add product to database   
    public function addProduct(){
        
        return view('Products/UserAddProduct');
    }

    public function insertProduct(Request $requ){
      
         Product::create([
        'name'         => $requ -> name,
        'price'        => $requ -> price,
        'description'  => $requ -> description,
        'photo'        => $requ -> gallery,

         ]);
         return redirect()->back();
        }
}
