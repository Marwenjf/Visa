<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|----------npm insta----------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/blank',function(){
     return view('pages.blank');
});
Route::get('/buttons',function(){
    return view ('pages.buttons');
});
Route::get('/flot',function(){
    return view ('pages.flot');
});
Route::get('/forms',function(){
    return view ('pages.forms');
});
Route::get('/grid',function(){
    return view ('pages.grid');
});
Route::get('/icons',function(){
    return view ('pages.icons');
});
Route::get('/login',function(){
    return view ('pages.login');
});
Route::get('/morris',function(){
    return view ('pages.morris');
});
Route::get('/notifications',function(){
    return view ('pages.notifications');
});
Route::get('/panels-wells',function(){
    return view ('pages.panels-wells');
});
Route::get('/typography',function(){
    return view ('pages.typography');
});



