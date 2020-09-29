<?php

use Illuminate\Support\Facades\Route;

// Route::view(url,file locate);

// Route::view('/','welcome');
// Route::view('contact','contact');
// Route::view('series/create','series.create');

// Route::get('/',function(){
//   $name = "Dewangga Putra Kuswanto";
//   return view('welcome',['name'=> $name]);
// });

Route::get('/', 'HomeController');

Route::get('posts/{post:slug}', 'PostController@show');

Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('login', 'login');
