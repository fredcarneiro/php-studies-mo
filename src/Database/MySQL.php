<?php

namespace Carneiro\Database;

Use Carneiro\Database\DatabaseConnection;

/**
* MySQL Connection
*/
class MySQL extends DatabaseConnection
{
	
	private $dbUser = 'root';
	private $dbUserPassword = '';
	private $dbServer = 'localhost';
	private $dbPort = '3306';
	private $dbName = 'samtt';

	public function connect()
	{
		return mysqli_connect($this->dbServer, $this->dbUser, $this->dbUserPassword, $this->dbName);
	}

	public function closeConnection()
	{
		mysqli_close($this->connection);
	}

}