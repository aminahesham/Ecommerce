<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {



////////////////////////////////////////////////// SITE OPERATIONS ///////////////////////////////////////////////////////////////////

Route::get('redirect'         , [UsersController::class,'redirect'])->name('redirect');

Route::get('/home'            , [UsersController::class,'homeView']);

Route::get('useraddproduct'   , [productsController::class,'userAddProduct']);

Route::post('Uinsertproduct'  , [productsController::class,'userInsertProduct']);
	
Route::get('products'         , [ProductsController::class,'homeShowProducts']);

Route::get('allproducts'      , [ProductsController::class,'allProducts']);

Route::get('details/{id}'     , [ProductsController::class,'productDetails'])->name('product.details');

Route::get('/search'          , [ProductsController::class,'Search']);

Route::post('/addtocart'      , [CartController::class,'addToCart'])->name('addtocart');

Route::get('/cartlist'        , [CartController::class,'cartList']);

Route::get('/cartdelete/{id}' , [CartController::class,'cartDelete']);

Route::get('/confirmorder'    , [OrdersController::class,'confirmOrder']);

Route::post('/saveorder'      , [OrdersController::class,'saveOrder']);

Route::get('/myorders'        , [OrdersController::class,'myOrders']);

///////////////////////////////////////////////////////////// ADMIN DASHBOARD////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'role:admin'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    
    Route::get('showusers'          , [UsersController::class,'showUsers'])->name('showusers');
    Route::get('showorders'         , [OrdersController::class,'showOrders'])->name('showorders');
    Route::get('showproducts'       , [ProductsController::class,'showProducts'])->name('showproducts');
    Route::post('insertproduct'     , [ProductsController::class,'insertProduct'])->name('insertproduct');
    Route::get('addproduct'         , [ProductsController::class,'addproduct'])->name('addproduct');
    Route::get('deleteproduct/{id}' , [ProductsController::class,'deleteProduct'])->name('admindeleteproduct');

    Route::get('deleteorder/{id}'   , [OrdersController::class,'deleteOrder'])->name('admindeleteorder');

    Route::get('deleteuser/{id}'    , [UsersController::class,'deleteUser'])->name('admindeleteuser');
    
    Route::get ('getuser/{id}'      , [UsersController::class,'getUser']);
    Route::post('updateuser/{id}'   , [UsersController::class,'updateUser']);
    
    
    Route::get('getproduct/{id}'    , [ProductsController::class,'getProduct']);
    
    Route::post('updateproduct/{id}', [ProductsController::class,'updateProduct']);

});
});

require __DIR__.'/auth.php';
