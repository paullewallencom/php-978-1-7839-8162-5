<?php
class Logger{
	public function __construct(){
		$this->path = LOG_PATH;
	}

	private function log($type, $message){
		$handle = fopen($this->path."app.log","a+");
		fwrite($handle, $type." : ".$message.PHP_EOL);
		fclose($handle);
	}

	public function info($message){
		$this->log("info",$message);
	}

	public function warn($message){
		$this->log("info",$message);
	}

	public function error($message){
		$this->log("info",$message);
	}
}
?>
