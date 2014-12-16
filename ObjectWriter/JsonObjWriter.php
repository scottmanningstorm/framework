<?php 

class JsonObjWriter implements ObjectWriterInterface
{
	public function write($obj) 
	{
		echo json_encode($obj); 
	}	
	
	public function sendObj($obj, $send_address=null) 
	{
		if ($send_address == null) {
			$this->write($obj);
		} else {
			//Send obj off to address. 
		}

		return http_response_code(); 
	}

}


?> 