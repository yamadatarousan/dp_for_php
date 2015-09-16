<?php
require_once 'SingletonSample.class.php';

$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo "<hr>";

echo 'instance ID : ' . $instance1->getID() . '<br>';
echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

$instance1_clone = clone $instance1;