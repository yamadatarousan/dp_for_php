<?php
require_once 'OrderDao.class.php';
require_once 'Order.class.php';

class MockOrderDao implements OrderDao
{
	public function findById($order_id)
	{
		$order = new Order("999");
		$order->additem(new Item(99, "dummy"));
		$order->additem(new Item(99, "dummy"));
		$order->additem(new Item(99, "dummy"));

		return $order;
	}
}