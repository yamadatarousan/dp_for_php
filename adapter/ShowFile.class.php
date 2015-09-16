<?php

class ShowFile
{
	private $filename;

	public function __construct($filename)
	{
		if(!is_readable($filename))
		{
			throw new Exception("Error Processing Request", 1);
		}
		$this->filename = $filename;
	}

	public function showPlain()
	{
		echo "<pre>";
		echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES, mb_internal_encoding());
		echo "</pre>";
	}

	public function showHighlight()
	{
		highlight_file($this->filename);
	}

}