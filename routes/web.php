<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;


///////////////////////////////////// ADMIN LOGIN  ///////////////////////////////////////////////////////////////

Route::get('admin/login'  ,[AdminAuthController::class,'getLogin'])->name('adminLogin');

Route::post('admin/login' ,[AdminAuthController::class,'postLogin'])->name('adminLoginPost');

Route::get('admin/logout' ,[AdminAuthController::class,'logout'])->name('adminLogout');


////////////////////////////////////// ADMIN OPERATIONS ////////////////////////////////////////////////////////


Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
	// Admin Dashboard

Route::get('dashboard'         ,[App\Http\Controllers\AdminController::class,'dashboard'])->name('admindashboard');	

Route::get('showproducts'      , [AdminController::class,'showproducts'])->name('adminshowproducts');

Route::get('showusers'         , [AdminController::class,'showusers'])->name('adminshowusers');

Route::get('showorders'        , [AdminController::class,'showorders'])->name('adminshoworders');

Route::get('showadmins'        , [AdminController::class,'showadmins'])->name('adminshowadmins');

Route::get('addproduct'        , [AdminController::class,'addproduct'])->name('adminaddproduct');

Route::post('insertproduct'    , [AdminController::class,'insertproduct'])->name('admininsertproduct');

Route::get('addadmin'          , [AdminController::class,'addadmin'])->name('adminaddadmin');

Route::post('insertadmin'      , [AdminController::class,'insertadmin'])->name('admininsertadmin');
	
Route::get('deleteproduct/{id}', [AdminController::class,'deleteproduct'])->name('admindeleteproduct');

Route::get('deleteadmin/{id}', [AdminController::class,'deleteadmin'])->name('admindeleteadmin');

Route::get('deleteorder/{id}', [AdminController::class,'deleteorder'])->name('admindeleteorder');

Route::get('deleteuser/{id}', [AdminController::class,'deleteuser'])->name('admindeleteuser');


});


/////////////////////////////////////// USER LOGIN  ////////////////////////////////////////////////////

Route::get('/logout',function(){
Session :: forget('users');
return redirect('login');
});

Route::view('/register'  , 'register');

Route::post('/register'  , [UserController::class,'register']);

Route::get('/login'      , [UserController::class,'loginview']);

Route::post('/login'     , [UserController::class,'login']);

Route::get('/home'       , [UserController::class,'homeview']);



////////////////////////////////////////////////// SITE OPERATIONS ///////////////////////////////////////////////////////////////////


Route::get('products'         , [ProductController::class,'showproducts']);

Route::get('details/{id}'     , [ProductController::class,'productdetails'])->name('product.details');

Route::get('/search'          , [ProductController::class,'search']);

Route::post('/addtocart'      , [ProductController::class,'addtocart']);

Route::get('/cartlist'        , [ProductController::class,'cartlist']);

Route::get('/cartdelete/{id}' , [ProductController::class,'cartdelete']);

Route::get('/confirmorder'    , [ProductController::class,'confirmorder']);

Route::post('/saveorder'      , [ProductController::class,'saveorder']);

Route::get('/myorders'        , [ProductController::class,'myorders']);


