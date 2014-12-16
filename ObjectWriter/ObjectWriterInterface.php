<?php 

interface ObjectWriterInterface
{
	public function write($obj);
	public function sendObj($obj, $send_address=null);
}

?>