<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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

Route::get('/',[MenuController::class,'homePage']);
Route::get('/group/{group}',[MenuController::class,'groupPage']);
Route::get('/admin',[MenuController::class,'adminPage'])->name('admin');
Route::get('/edit/{item}',[MenuController::class,'editOrCreate']);
Route::get('/delete/{item}',[MenuController::class,'deleteItem']);

Route::get('/test/{id}',[MenuController::class,'test']);
