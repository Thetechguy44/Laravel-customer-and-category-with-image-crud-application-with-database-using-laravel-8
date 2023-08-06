<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
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




//route for customers
Route::get('view',[CustomerController::class, 'index']);
Route::get('add-customer',[CustomerController::class, 'addcustomer']);
Route::post('submit',[CustomerController::class, 'create']);
Route::get('edit-customer/{CustomerID}',[CustomerController::class, 'edit']);
Route::post('update-customer',[CustomerController::class, 'updatecustomer']);
Route::get('delete-customer/{CustomerID}',[CustomerController::class, 'deletecustomer']);
//end route for customers


//route for category
Route::get('show',[CategoryController::class, 'index']);
Route::get('add-category',[CategoryController::class, 'addcategory']);
Route::post('input',[CategoryController::class, 'create']);
Route::get('edit-category/{CategoryID}',[CategoryController::class, 'edit']);
Route::post('update-category',[CategoryController::class, 'updatecategory']);
Route::get('delete-category/{CategoryID}',[CategoryController::class, 'deletecategory']);
//end route for category