<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    //
    public function loginview(){
        return view('Login');
    }
    public function homeview(){
        return view('Home');
    }
    

    public function login(Request $req){

        $user=User::where(['email'=> $req -> email])-> first();
        if(! $user ||Hash::check($req->password,$user->password)){
            return 'User Name or Password incorrect';
        }else{
            $req -> Session() -> put('user', $user);
            return redirect('/home');
        }
    }
}
