<?php 

class sendDataController extends BaseController
{  
    public function index() 
    {	
        $data_router = new DataRouter(); 
        
        $data_router->getServerRequestData();
        
        $routing_object = ObjectWriterFactory::build($data_router->getReturnFormat()); 
          
        echo $routing_object->sendObj($data_router->getData());  
    } 
}

?> 