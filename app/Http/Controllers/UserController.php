<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleUser;
use Hash;

class UserController extends Controller
{
    //
    public function loginView(){
        return view('Login');
    }
    
    public function homeView(){
        return view('Home');
    }
    

    public function Login(Request $req){
        $user=User::where(['email'=> $req -> email])-> first();
        if(! $user ||Hash::check($req->password,$user->password)){
            return 'User Name or Password incorrect';
        }else{
            $req -> Session() -> put('user', $user);
            return redirect('/home');
        }
    }

    public function Register(Request $req){

           $user=  User::create([
            'name'     => $req -> name,
            'email'    => $req -> email,
            'password' => $req -> password,
            
             ]);
             RoleUser::create([
               'role_id'  => 3,
               'user_id'  => $user -> id,
               'user_type'=> 'normal',
                 
             ]);

             return redirect('login');

     }


}
