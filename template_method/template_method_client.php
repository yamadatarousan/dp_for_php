<?php

require_once "ListDisplay.class.php";
require_once "TableDisplay.class.php";

$data = array(
	"Design Pattern",
	"Gang of fore",
	"template method sample1",
	"template method sample2",
	);

$display1 = new ListDisplay($data);
$display2 = new TableDisplay($data);

$display1->display();
echo "<hr>";
$display2->display();