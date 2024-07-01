<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/nav', function () {
//     return view('navbar');
// });

Route::get('/login', function () {
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/manage', [ManageProductController::class, 'manageProduct']);
Route::get('/profile', [HomePageController::class, 'userProfile']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/addToCart',[CartController::class , 'addToCart']);

Route::get('/add',[ManageProductController::class , 'showAddProd']);
Route::post('/add',[ProductController::class , 'addProduct']);

Route::get('delete/{id}', [ProductController::class, 'deleteProduct']);
Route::get('deleteCart/{id}', [CartController::class, 'deleteCart']);

Route::get('/update/{id}',[ManageProductController::class , 'showUpdateProd']);
Route::post('/update/{id}',[ProductController::class , 'updateProduct']);

Route::get('/cart/{id}',[CartController::class , 'showCart']);
Route::get('/history/{id}',[TransactionController::class , 'showTransaction']);
Route::get('/purchase/{id}',[TransactionController::class , 'purchase']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/', [HomePageController::class, 'homePage']); // home
Route::get('/manageSearch', [ManageProductController::class, 'manageProductSearch']);
Route::get('/category/{categories}', [CategoryController::class, 'categoryPage']); // category
Route::get('/{products}', [ProductController::class, 'ProductDetail'])->name('products.ProductDetail');
