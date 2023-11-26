<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class, 'index']);
Route::get('/Store',[FrontendController::class, 'Store']);
Route::get('/Checkout',[FrontendController::class,'Checkout']);
Route::get('/Category',[FrontendController::class,'Category']);
Route::get('/Store/Laptops/{id}',[FrontendController::class,'StoreLaptops']);
Route::post('/product/add/to/cart',[FrontendController::class,'productAddToCart']);
Route::get('/cart/product/remove/{id}',[FrontendController::class,'cartProductRemove']);
Route::get('/cart/checkout',[FrontendController::class, 'cartCheckout']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile',[HomeController::class,'profile']);
Route::get('/contact',[HomeController::class,'contact']);

Route::get('/category/add', [CategoryController::class, 'add_Category']);
Route::get('/category/manage', [CategoryController::class, 'manage_Category']);
Route::post('/catagory/store',[CategoryController::class,'store_Catagory']);
Route::post('/catagory/update/{id}',[CategoryController::class,'update_Catagory']);
Route::get('/category/edit/{id}',[CategoryController::class,'edit_Category']);
Route::get('/category/delete/{id}',[CategoryController::class,'delete_Category']);

Route::get('/product/add', [ProductController::class, 'add_Product']);
Route::get('/product/manage', [ProductController::class, 'manage_Product']);
Route::post('/product/store',[ProductController::class,'store_Product']);
Route::post('/product/update/{id}',[ProductController::class,'update_Product']);
Route::get('/product/edit/{id}',[ProductController::class,'edit_Product']);
Route::get('/product/delete/{id}',[ProductController::class,'delete_Product']);

