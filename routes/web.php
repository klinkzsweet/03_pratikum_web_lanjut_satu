<?php

use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanProduct;
use App\Http\Controllers\HalamanProgram;
use Illuminate\Support\Facades\Route;

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
#1
Route::get('/home', [HalamanHome::class, 'home']);

#2
Route::prefix('product')->group(function(){
    Route::get('/product1', [HalamanProduct::class, 'product']);
    Route::get('/product2', [HalamanProduct::class, 'product2']);
    Route::get('/product3', [HalamanProduct::class, 'product3']);
    Route::get('/product4', [HalamanProduct::class, 'product4']);
});

#3
Route::get('/news{id}', [HalamanNews::class, 'news']);

#4
Route::prefix('program')->group(function(){
    Route::get('/program1', [HalamanProgram::class, 'program']);
    Route::get('/program2', [HalamanProgram::class, 'program2']);
    Route::get('/program3', [HalamanProgram::class, 'program3']);
});

#5
Route::get('/aboutus', [HalamanAboutUs::class, 'about']);

#6
Route::resource('/contactus', HalamanContactUs::class)->only(['index']);


