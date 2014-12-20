<?php 

class JsonObjWriter implements ObjectWriterInterface
{
	public function dumpData($data) 
	{
		echo json_encode($data); 
	}	
	
	public function sendObj($data, $send_address=null) 
	{
		if ($send_address == null) {

			$this->dumpData($data);

		} else {
			// Send obj off to address. 
		}

	}

}


?> 