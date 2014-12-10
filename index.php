<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);

require_once('Autoload/AutoLoader.php'); 
Autoloader::Autoload(); 

 //replace with Autoloads//
//include ("Controller/ControllerFactory.php"); 
//include ("router/Router.php"); 

//$route = new Router(); 

//var_dump($route->extractUri()); 



Route::post('/help/index', 'HomeController@index'); 
Route::get('/controllerBLOG/method/{id}/{title}', 'sdfsdfsd@ssdf');
Route::get('/controllerBLOG/MEWX/{page}/{hoistory}', 'fsdf@sdfd');

//$client = new RouteClient('','',''); 
//var_dump(Route::$router->route_collection); 
Route::matchRoute();
//call_user_func_array(array(new test(), "t"), $p);
//echo ("asdas"); 
//$x = array("firstparam" => "Value 1", "second Param" => "second value");
//$controller = ControllerFactory::build('Route', 'test', $x ); 

//Route::build('/', "HomeController@index");
 

?> 