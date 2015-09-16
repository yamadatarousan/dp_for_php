<?php
require_once 'ShowFile.class.php';

try
{
	$show_file = new ShowFile("./ShowFile.class.php");
}
catch(Exception $e)
{
	die($e->getMessage());
}

$show_file->showPlain();
echo "<hr>";
$show_file->showHighlight();