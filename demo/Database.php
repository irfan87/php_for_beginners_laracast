<?php
// connect to our MySQL DB and execute the query
class Database
{
	public $connection;

	public function __construct($config, $username = 'root', $password = '')
	{

		// initialize PDO
		$dsn = 'mysql:' . http_build_query($config, '', ';');


		$this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
	}

	public function queryAll($query)
	{
		// prepare new query
		$statement = $this->connection->prepare($query);
		$statement->execute();

		return $statement;
	}

	public function queryOne($query, $params = [])
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($params);

		return $statement;
	}
}
