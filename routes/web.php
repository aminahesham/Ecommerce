<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;


///////////////////////////////////// ADMIN LOGIN  ///////////////////////////////////////////////////////////////

Route::get('admin/login'  ,[AdminAuthController::class,'getLogin'])->name('adminLogin');

Route::post('admin/login' ,[AdminAuthController::class,'postLogin'])->name('adminLoginPost');

Route::get('admin/logout' ,[AdminAuthController::class,'Logout'])->name('adminLogout');


////////////////////////////////////// ADMIN OPERATIONS ////////////////////////////////////////////////////////


Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
	// Admin Dashboard

Route::get('dashboard'          , [AdminController::class,'Dashboard'])->name('admindashboard');	

Route::get('showproducts'       , [AdminController::class,'showProducts'])->name('adminshowproducts');

Route::get('showusers'          , [AdminController::class,'showUsers'])->name('adminshowusers');

Route::get('showorders'         , [AdminController::class,'showOrders'])->name('adminshoworders');

Route::get('showadmins'         , [AdminController::class,'showAdmins'])->name('adminshowadmins');

Route::get('addproduct'         , [AdminController::class,'addProduct'])->name('adminaddproduct');

Route::post('insertproduct'     , [AdminController::class,'insertProduct'])->name('admininsertproduct');

Route::get('addadmin'           , [AdminController::class,'addAdmin'])->name('adminaddadmin');

Route::post('insertadmin'       , [AdminController::class,'insertAdmin'])->name('admininsertadmin');
	
Route::get('deleteproduct/{id}' , [AdminController::class,'deleteProduct'])->name('admindeleteproduct');

Route::get('deleteadmin/{id}'   , [AdminController::class,'deleteAdmin'])->name('admindeleteadmin');

Route::get('deleteorder/{id}'   , [AdminController::class,'deleteOrder'])->name('admindeleteorder');

Route::get('deleteuser/{id}'    , [AdminController::class,'deleteUser'])->name('admindeleteuser');

Route::get('getproduct/{id}'    , [AdminController::class,'getProduct']);

Route::post('updateproduct/{id}', [AdminController::class,'updateProduct']);

Route::get('getuser/{id}'       , [AdminController::class,'getUser']);

Route::post('updateuser/{id}'   , [AdminController::class,'updateUser']);


});


/////////////////////////////////////// USER LOGIN  ////////////////////////////////////////////////////

Route::get('/logout',function(){
Session :: forget('users');
return redirect('login');
});

Route::view('/register'  , 'register');

Route::post('/register'  , [UserController::class,'Register']);

Route::get('/login'      , [UserController::class,'loginView']);

Route::post('/login'     , [UserController::class,'Login']);

Route::get('/home'       , [UserController::class,'homeView']);



////////////////////////////////////////////////// SITE OPERATIONS ///////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'web'], function () {
	
Route::get('products'         , [ProductController::class,'showProducts']);

Route::get('details/{id}'     , [ProductController::class,'productDetails'])->name('product.details');

Route::get('/search'          , [ProductController::class,'Search']);

Route::post('/addtocart'      , [ProductController::class,'addToCart']);

Route::get('/cartlist'        , [ProductController::class,'cartList']);

Route::get('/cartdelete/{id}' , [ProductController::class,'cartDelete']);

Route::get('/confirmorder'    , [ProductController::class,'confirmOrder']);

Route::post('/saveorder'      , [ProductController::class,'saveOrder']);

Route::get('/myorders'        , [ProductController::class,'myOrders']);

Route::get('useraddproduct'   , [productController::class,'addProduct']);

Route::post('insertproduct'   , [productController::class,'insertProduct']);


});