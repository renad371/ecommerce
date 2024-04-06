<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;

use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});
Route::get ('/Dashboard',[Dashboard::class,'index'])->name('index');

//.................................Products.........................................
Route::get ('/Dashboard/Product',[Dashboard::class,'GetProduct'])->name('Products');

Route::post('/Dashboard/createproducts',[Dashboard::class,'CreateProducts'])->name('createproducts');

Route::get('/del/{id}' , [Dashboard::class, 'del'])->name('del');

Route::get('/edit' , [Dashboard::class, 'edit'])->name('edit');

Route::get('/Dashboard/Search',[Dashboard::class,'Search'])->name('Search');

//..........................Product Details.........................................

Route::get('/Dashboard/GetProductsDetails' , [Dashboard::class, 'GetProductsDetails'])->name('ProductDetails');

Route::post('/ProductDetails/CreateProductDetails' , [Dashboard::class, 'CreateProductDetails'])->name('CreateProductDetails');

Route::get('Products/delete/{id}', [Dashboard::class, 'DeleteDetails'])->name('DeleteDetails');


Route::post('/dashboard/createproductdetails',[Dashboard::class,'createProductDetails'])->name('create-details');

//....................................Shopping..........................................
Route::get('/shopping/showitems' , [Shopping::class, 'ShowListItemPhone'])->name('showitems');

Route::get('/shopping/showdetails/{id}' , [Shopping::class, 'ShowDetailsPhone'])->name('showdetails');

Route::get('/shopping/add_to_cart/{id}' , [Shopping::class, 'AddToCart'])->name('AddToCart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
