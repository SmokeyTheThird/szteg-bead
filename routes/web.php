<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', function(){
    return view('index');
});

Route::get('/books', function(){
    return view('books');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/rentBook', function(){
    return view('rentBook');
});

Route::get('/rentedBook', function(){
    return view('rentedBook');
});