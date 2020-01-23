<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('/');
Route::get('about',function(){
    return view('frontend.about');
})->name('about');
Route::get('packages',function(){
    return view('frontend.packages');
})->name('packages');
Route::get('hotels',function(){
    return view('frontend.hotels');
})->name('hotels');
Route::get('insurance',function(){
    return view('frontend.insurance');
})->name('insurance');
Route::get('blog_home',function(){
    return view('frontend.blog_home');
})->name('blog_home');
Route::get('blog_single',function(){
    return view('frontend.blog_single');
})->name('blog_single');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
