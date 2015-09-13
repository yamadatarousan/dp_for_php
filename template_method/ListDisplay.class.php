<?php

require_once "AbstractDisplay.class.php";

// concreate（具象）class
// list表記パターン
class ListDisplay extends AbstractDisplay
{

	protected function displayHeader()
	{
		echo "<dl>";
	}

	protected function displayBody()
	{
		foreach ($this->getData() as $key => $value) {
			echo "<dt>Item{$key}</dt>";
			echo "<dd>{$value}</dd>";
		}
	}

	protected function displayFooter()
	{
		echo "</dl>";
	}

}