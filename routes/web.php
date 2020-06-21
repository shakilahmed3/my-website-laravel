<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'siteController@showHome');
Route::get('/about', 'siteController@showAbout');
Route::get('/service', 'siteController@showService');
Route::get('/portfolio', 'siteController@showProtfolio');
