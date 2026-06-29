<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return View('about');
});
Route::get('/contact', function () {
    return View('contact');
});
*/
// the same as above comment
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
