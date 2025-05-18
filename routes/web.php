<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// About us
Route::get('about', function (){
    return view('about');
})->name('about');

// project
Route::get('project', function(){
    return view('project');
})->name('project');

// Blog
Route::get('blog', function(){
    return view('blog');
})->name('blog');

// Contact
Route::get('contact', function(){
    return view('contact');
})->name('contact');
