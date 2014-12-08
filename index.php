<?php 
ob_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

require_once('Autoload/AutoLoader.php'); 
Autoloader::Autoload(); 

Route::post('/home', 'HomeController@index'); 
Route::post('/', 'test@printStuff'); 

Route::startRouting(); 

//var_dump(Route::getRouter()->collections[0]->getUri());
//Route::build('/', "HomeController@index");


?> 