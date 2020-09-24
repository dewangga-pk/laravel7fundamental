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

Route::get('/',function(){
  $postBody = "Lorem ipsum dolor sit amet, consectetur
  adipisicing elit, sed do eiusmod tempor incididunt ut
  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
  eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
  sunt in culpa qui officia deserunt mollit anim id est laborum.";
  return view('welcome',['body'=> $postBody]);
});
