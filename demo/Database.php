<?php
// connect to our MySQL DB and execute the query
class Database
{
	public $connection;

	public function __construct()
	{
		// initialize PDO
		$dsn = "mysql:host=localhost;port=3306;dbname=laracast_php_beginner;charset=utf8mb4;user=root;password=";

		$this->connection = new PDO($dsn);
	}

	public function queryAll($query)
	{
		// prepare new query
		$statement = $this->connection->prepare($query);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function queryOne($query)
	{
		$statement = $this->connection->prepare($query);
		$statement->execute();

		return $statement->fetch(PDO::FETCH_ASSOC);
	}
}