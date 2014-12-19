<?php 

interface ObjectWriterInterface
{
	public function dumpData($data);
	public function sendObj($data, $send_address=null);
}

?>