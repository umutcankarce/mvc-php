<?php 
use \app\Core\Route;

Route::get('/',function(){
  
});

Route::get('/users',function(){

});



Route::get('/register','RegisterController@register');
Route::post('/register','RegisterController@register');
Route::post('/form','RegisterController@showForm');
Route::put('/register','RegisterController@register');















Route::dispatch();