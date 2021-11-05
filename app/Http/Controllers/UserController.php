<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleUser;
use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function loginView(){
        return view('Login');
    }
    
    public function homeView(){
        return view('Home');
    }
    
    public function Login(Request $request){
        $user=User::where(['email'=> $req -> email])-> first();

        $request->authenticate();

        $request->session()->regenerate()->put('user', $user);

        return redirect('/redirect');
    }


    public function Register(Request $req){

           $user=  User::create([
            'name'     => $req -> name,
            'email'    => $req -> email,
            'password' => $req -> password,
            
             ]);
             RoleUser::create([
               'role_id'  => 1,
               'user_id'  => $user -> id,
               'user_type'=> 'normal',
                 
             ]);

             return redirect('login');

     }

     public function redirect(){

        $role = Auth :: user();

        if($role->hasRole('admin')){

            return view('Dashboard');
        }
        else{
            return view('Home');
        }
    }
}
