<?php
require_once 'Listing.class.php';
require_once 'ExtendedListing.class.php';
require_once 'FileDataSouce.class.php';

$list1 = new Listing(new FileDataSouce("data.txt"));
$list2 = new ExtendedListing(new FileDataSouce("data.txt"));

try {
	$list1->open();
	$list2->open();
} catch (Exception $e) {
	die($e->getMessage());
}

/**
 * 取得したデータの表示（readメソッド）
 */
$data = $list1->read();
echo $data;

/**
 * 取得したデータの表示（readWithEncodeメソッド）
 */
$data = $list2->readWithEncode();
echo $data;

$list1->close();
$list2->close();