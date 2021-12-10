<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;


Route::group(['middleware' => 'auth'], function () {



////////////////////////////////////////////////// SITE OPERATIONS ///////////////////////////////////////////////////////////////////

Route::get('redirect'         , [UsersController::class,'redirect'])->name('redirect');

Route::get('useraddproduct'   , [productsController::class,'userAddProduct'])->name('useraddproduct');

Route::post('Uinsertproduct'  , [productsController::class,'insertProduct'])->name('Uinsertproduct');
	
Route::get('products'         , [ProductsController::class,'homeShowProducts'])->name('products');

Route::get('allproducts'      , [ProductsController::class,'allProducts'])->name('allproducts');

Route::get('details/{id}'     , [ProductsController::class,'productDetails'])->name('product.details');

Route::get('/search'          , [ProductsController::class,'Search'])->name('search');

Route::post('/addtocart'      , [CartController::class,'addToCart'])->name('addtocart');

Route::get('/cartlist'        , [CartController::class,'cartList'])->name('cartlist');

Route::get('/cartdelete/{id}' , [CartController::class,'cartDelete'])->name('cartdelete');

Route::get('/confirmorder'    , [OrdersController::class,'confirmOrder'])->name('confirmorder');

Route::post('/saveorder'      , [OrdersController::class,'saveOrder'])->name('saveorder');

Route::get('/myorders'        , [OrdersController::class,'myOrders'])->name('myorders');

Route::get('/home', function () {
    return view('Home');
})->name('home');

///////////////////////////////////////////////////////////// ADMIN DASHBOARD ////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'role:admin'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    
    Route::get('showproducts'       , [ProductsController::class,'showProducts'])->name('showproducts');
    Route::post('insertproduct'     , [ProductsController::class,'insertProduct'])->name('insertproduct');
    Route::get('addproduct'         , [ProductsController::class,'addproduct'])->name('addproduct');
    Route::get('deleteproduct/{id}' , [ProductsController::class,'deleteProduct'])->name('admindeleteproduct');
    Route::get('getproduct/{id}'    , [ProductsController::class,'getProduct'])->name('admingetproduct');
    Route::post('updateproduct/{id}', [ProductsController::class,'updateProduct'])->name('adminupdateproduct');

    Route::get('showorders'         , [OrdersController::class,'showOrders'])->name('showorders');
    Route::get('deleteorder/{id}'   , [OrdersController::class,'deleteOrder'])->name('admindeleteorder');

    Route::get('showusers'          , [UsersController::class,'showUsers'])->name('showusers');
    Route::get('deleteuser/{id}'    , [UsersController::class,'deleteUser'])->name('admindeleteuser');
    Route::get ('getuser/{id}'      , [UsersController::class,'getUser'])->name('admingetuser');
    Route::post('updateuser/{id}'   , [UsersController::class,'updateUser'])->name('adminupdateuser');
    
});
});

require __DIR__.'/auth.php';
