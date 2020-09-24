<?php

use Illuminate\Support\Facades\Route;

// Route::view(url,file locate);

// Route::view('/','welcome');
// Route::view('contact','contact');
// Route::view('series/create','series.create');

Route::get('/',function(){
  $name = "<h1>Dewangga Putra K</h1>";
  return view('welcome',['name'=> $name]);
});
