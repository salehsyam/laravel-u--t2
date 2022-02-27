<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|team
*/


Route::view('/','index')->name('/');
Route::view('/contact','contact')->name('contact-us');
Route::view('/about','about')->name('about-us');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/services','services')->name('services');
Route::view('/team','team')->name('team');
Route::view('/blog','blog')->name('blog');