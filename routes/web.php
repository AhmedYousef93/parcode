<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[ProductController::class,'index']);
Route::get('/create',[ProductController::class,'create']);
Route::post('/post',[ProductController::class,'store']);
Route::get('/parcode',[ProductController::class,'generateBarcode']);
