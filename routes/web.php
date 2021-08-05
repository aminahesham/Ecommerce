<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/////////////////////////////////////admin login /////////////////////////////////////////////

Route::get('admin/login'  ,[AdminAuthController::class,'getLogin'])->name('adminLogin');

Route::post('admin/login' ,[AdminAuthController::class,'postLogin'])->name('adminLoginPost');

Route::get('admin/logout' ,[AdminAuthController::class,'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
Route::get('dashboard'    ,[App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');	

/////////////////////////////////////////dashboard operations//////////////////////////////////////////////////

Route::get('showproducts'      , [AdminController::class,'showproducts'])->name('adminshowproducts');

Route::get('addproduct'        , [AdminController::class,'addproduct'])->name('adminaddproduct');

Route::post('insertproduct'    , [AdminController::class,'insertproduct'])->name('admininsertproduct');
	
Route::get('deleteproduct/{id}', [AdminController::class,'deleteproduct'])->name('admindeleteproduct');
});







/////////////////////////////////////// user login ////////////////////////////////////////////////////

Route::get('/logout',function(){
Session :: forget('users');
return redirect('login');
});

Route::view('/register'  , 'register');

Route::post('/register'  , [UserController::class,'register']);

Route::get('/login'      , [UserController::class,'loginview']);

Route::post('/login'     , [UserController::class,'login']);

Route::get('/home'       , [UserController::class,'homeview']);



//*********************************************site operations*******************************************************************************//

Route::get('products'         , [ProductController::class,'showproducts']);

Route::get('details/{id}'     , [ProductController::class,'productdetails'])->name('product.details');

Route::get('/search'          , [ProductController::class,'search']);

Route::post('/addtocart'      , [ProductController::class,'addtocart']);

Route::get('/cartlist'        , [ProductController::class,'cartlist']);

Route::get('/cartdelete/{id}' , [ProductController::class,'cartdelete']);

Route::get('/confirmorder'    , [ProductController::class,'confirmorder']);

Route::post('/saveorder'      , [ProductController::class,'saveorder']);

Route::get('/myorders'        , [ProductController::class,'myorders']);


