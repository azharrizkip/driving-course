<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@Home');
Route::get('/contact-us', 'App\Http\Controllers\PagesController@ContactUs');
Route::get('/our-instructors', 'App\Http\Controllers\PagesController@OurInstructors');
Route::get('/about-us', 'App\Http\Controllers\PagesController@AboutUs');
Route::get('/our-services', 'App\Http\Controllers\PagesController@Services');

