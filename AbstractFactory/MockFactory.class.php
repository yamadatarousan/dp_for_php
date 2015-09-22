<?php
require_once 'DAOFactory.class.php';
require_once 'MockItemDao.class.php';
require_once 'MockOrderDao.class.php';

class MockFactory implements DaoFactory
{
	public function createItemDao()
	{
		return new MockItemDao();
	}
	public function createOrderDao()
	{
		return new MockOrderDao();
	}
}