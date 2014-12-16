<?php 

class XmlObjWriter implements ObjectWriterInterface
{	

	public function write($obj) 
	{
		echo '< api >
				< key > data echoed out from XML </ key > 
			< username >  < /username >
			< password >  </ password > 
			</ api >';
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