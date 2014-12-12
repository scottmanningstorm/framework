<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);

require_once('Autoload/AutoLoader.php'); 
Autoloader::Autoload(); 

/* 

get Root of site. 

*/ 

Route::post('/', 'HomeController@index');
Route::post('/home/{id}', 'HomeController@index');
Route::post('/blog', 'BlogController@index');
Route::post('/error', 'ErrorController@index');

$routes = Route::getRouter()->route_collection; 


echo '<div style=text-align:center;>';
echo 'We have ' . count($routes) .' routes avalible: <br />';

foreach($routes as $route) {	
	echo '<a href="http://192.168.0.38:8888/framework'.$route->getMatchUri(true).'"> '.$route->getController().' routes to ->'.$route->getMethod() .' </a> <br />';  
}

echo '</div>'; 
echo '<br /> <br /> <br /> <br />'; 

Route::matchRoute();

?> 