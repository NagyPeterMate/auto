<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autok;
use App\Http\Controllers\Balesetek;
use App\Http\Controllers\Tulajdonos;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autok',function(){
    return view ('autok');
});

Route::get('/tulajdonos',function(){
    return view ('tulajdonos');
});

Route::get('/balesetek',function(){
    return view ('balesetek');
});

Route::get('/auto',[Autok::class, "autok"]);
Route::get('/auto',[Tulajdonos::class, "tulajdonosok"]);
Route::get('/auto',[Balesetek::class, "balesetek"]);
