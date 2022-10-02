<?php

use Illuminate\Support\Facades\Route;

Route::get('/view', function () {
    echo "shoili akter Mula";
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return "hello world";
});




Route::get('/test', 'TestController@myFunction');
Route::post('/getData', 'TestController@getDataItems');
Route::get('/image_upload', 'ImageController@upload');
Route::post('/save_image', 'ImageController@save');
Route::get('/view_image', 'ImageController@view');
