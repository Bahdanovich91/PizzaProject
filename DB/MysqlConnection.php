<?php
require_once './DB/DBConnection.php';

class MysqlConnection extends DBConnection {

	public function __construct()
	{
		$host = 'localhost';
		$user = 'root';
		$pass = 'root';
		$name = 'products';
		$this->setConnection(mysqli_connect($host, $user, $pass, $name));
	}
}