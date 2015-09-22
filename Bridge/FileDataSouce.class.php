<?php
require_once 'DataSouce.class.php';

class FileDataSouce implements DataSouce
{
	private $source_name;
	private $handler;

	function __construct($source_name)
	{
		$this->source_name = $source_name;
	}
	function open()
	{
		// var_dump($this->source_name);exit;
		if(!is_readable($this->source_name)){
			throw new Exception("missing of datasouce", 1);
		}
		$this->handler = fopen($this->source_name, "r");
		if(!$this->handler){
			throw new Exception("can not open datasouce", 1);
		}
	}
	function read(){
		$buffer = array();
		while (!feof($this->handler)) {
			$buffer[] = fgets($this->handler);
		}
		return join($buffer);
	}
	function close(){
		if(!is_null($this->handler)){
			fclose($this->handler);
		}
	}
}