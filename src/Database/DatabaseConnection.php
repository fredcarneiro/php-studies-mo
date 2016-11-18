<?php

namespace Carneiro\Database;

/**
* Database Connection Interface
*/
abstract class DatabaseConnection
{
	private $dbUser;
	private $dbUserPassword;
	private $dbServer;
	private $dbPort;
	private $dbName;
	private $connection;

	abstract function connect();
	abstract function closeConnection();

}