<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;


class AdminAuthController extends Controller
{/*
    
    protected $redirectTo = 'admin/login';

   
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return response()->view('Login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin=Admin::where(['email'=> $req -> email])-> first();
        if(! $admin ||Hash::check($req->password,$admin->password)){
            return 'User Name or Password incorrect';
        }else{
            $req -> Session() -> put('admin', $admin);
            return response()->view('admindashboard');
        }
        return $next($req);

    }
    public function Logout()
    {
      auth()->guard('admin')->logout();
      Session :: forget('admins');
      return redirect('admin/login');
    }
    */
}