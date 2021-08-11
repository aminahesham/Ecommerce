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
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
   // protected $redirectTo = 'adminLoginPost';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return response()->view('AdminLogin');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
      auth()->guard('admin')->logout();
      Session :: forget('admins');
      return redirect('admin/login');
    }
}