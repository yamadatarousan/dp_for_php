<?php

class News
{
	private $title;
	private $url;
	private $target_data;
	public function __construct($title,$url,$target_data){
		$this->title       = $title;
		$this->url         = $url;
		$this->target_data = $target_data;
	}
	public function getTitle(){
		return $this->title;
	}
	public function getDate(){
		return $this->target_data;
	}
	public function getUrl(){
		return $this->url;
	}
}
