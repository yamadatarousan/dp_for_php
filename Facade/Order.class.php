<?php
require_once 'OrderItem.class.php';

class Order
{
	private $items;

	public function __construct()
	{
		$this->items = array();
	}

	public function addItem(OrderItem $order_item)
	{
		$this->items[$order_item->getItem()->getId()] $order_item;
	}

	public function getItems()
	{
		return $this->items;
	}

}