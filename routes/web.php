<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/folders', [
    "uses"=>"FolderController@index",
    "as" => "folders"
]);
Route::get('/folder_form', [
    "uses"=>"FolderController@createFolder",
    "as" => "folder.form"
]);
Route::post('/folder/create', [
    "uses"=>"FolderController@create",
    "as" => "folder.create"
]);
Route::post('/signup', [
    "uses"=>"UserController@signUp",
    "as" => "signup"
]);
Route::post('/signin', [
    "uses"=>"UserController@signIn",
    "as" => "signin"
]);
Route::get('/', function() {
    return view("home");
});
Route::get('/',[
    "as"=>"home"
]);