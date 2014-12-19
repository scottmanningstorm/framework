<?php 

class XmlObjWriter implements ObjectWriterInterface
{	

	public function dumpData($data) 
	{	
		echo $this->buildXML($data);
	}
	
	public function buildXML($data)
	{	
		echo "<?xml version='1.0' encoding='UTF-8'?>"; 
		
		foreach ($data as $key => $value) {	

			if ($key != 'return_format') {

				echo '< '.$key.'>'.$value.'< /'.$key.'>';
				echo '<br />'; 
			}

		}
	}

	public function sendObj($data, $send_address=null) 
	{
		if ($send_address == null) {

			$this->dumpData($data);

		} else {
			// Send obj off to address else we echo. 
		}
		
		return http_response_code(); 
	}

}


?> 