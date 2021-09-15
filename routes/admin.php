<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;


Route::group(['prefix' => 'admin'], function () {
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