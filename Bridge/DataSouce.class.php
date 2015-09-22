<?php

interface DataSouce{
	public function open();
	public function read();
	public function close();
}