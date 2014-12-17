<?php 

ob_start();

require_once('Autoload/AutoLoader.php'); 
Autoloader::Autoload(); 
Application::Env('local');

/* 
get Root of site. 
*/ 

$db = Connection::GetInstance(); 

$data = $db->query('SELECT * FROM users');
 
die(var_dump($data->fetchAll()));

 

//die(var_dump($statment)); 

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home/post', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::post('/blog/add/{id}', 'BlogController@add');
Route::get('/error', 'ErrorController@index');

// Routes to route data off to 3rd party app. 
Route::post('/sendData', 'sendDataController@index');
Route::get('/sendData', 'sendDataController@index');

Route::matchRoute(); 

?> 