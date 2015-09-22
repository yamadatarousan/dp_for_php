<?php
require_once 'DataSouce.class.php';

class Listing
{
	private $data_souce;
	function __construct($data_souce){
		$this->data_souce = $data_souce;
	}
	function open(){
		$this->data_souce->open();
	}
	function read(){
		return $this->data_souce->read();
	}
	function close(){
		$this->data_souce->close();
	}
}