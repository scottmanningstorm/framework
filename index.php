<?php 



require_once('Autoload/AutoLoader.php'); 
Autoloader::Autoload(); 
Application::Env('local');
/* 

get Root of site. 

*/ 
$connect = new DatabaseConnection(); 
$connect->GetInstance();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home/post', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::post('/blog/add/{id}', 'BlogController@add');
Route::get('/error', 'ErrorController@index');

Route::matchRoute();

?> 