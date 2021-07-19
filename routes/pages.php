<?php


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/about','PageController@about');
Route::get('/blog','PageController@blog');
Route::get('/staff','PageController@staff');
