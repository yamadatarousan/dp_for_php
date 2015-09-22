<?php
require_once 'News.class.php';
require_once 'NewsBuilder.class.php';

class RssNewsBuilder implements NewsBuilder
{
	public function parse($url){
		$data = simplexml_load_file($url);
		if($data == false){
			throw new Exception("Error Processing Request", 1);
		}
		$list = array();
		foreach ($data->item as $item) {
			$dc = $item->children('http://purl.org/dc/elements/1.1/');
			$list[] = new News($item->title,$item->link,$dc->data);
		}
		return $list;
	}
}