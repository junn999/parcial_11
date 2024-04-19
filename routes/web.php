<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');  
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});
