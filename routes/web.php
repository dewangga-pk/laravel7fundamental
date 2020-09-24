<?php

use Illuminate\Support\Facades\Route;

// Route::view(url,file locate);
Route::view('/','welcome');
Route::view('contact','contact');
Route::view('series/create','series.create');
