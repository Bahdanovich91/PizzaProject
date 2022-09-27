<?php

abstract class DBConnection {

	private $connection;

	protected function setConnection($value)
	{
		$this->connection = $value;
	}

	public function getConnection()
	{
		return $this->connection;
	}
}