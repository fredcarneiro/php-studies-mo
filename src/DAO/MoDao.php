<?php

Namespace Carneiro\DAO;

Use Carneiro\DAO\MoDaoInterface;
Use Carneiro\Mo;
Use Carneiro\Database\DatabaseConnection;

/**
* Mobile Originated Class
*/
class MoDao implements MoDaoInterface
{
	
	private $connection;

	function __construct(DatabaseConnection $conn)
	{
		$this->connection = $conn->connect();
	}


	/**
	 * save MO to database
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function save(Mo $mo)
	{
		
        $query = "insert into mo values (
            		NULL,
		            '{$mo->getMsisdn()}',
		            '{$mo->getOperatorid()}',
		            '{$mo->getShortcodeid()}',
		            '{$mo->getText()}',
		            '{$mo->getAuthtoken()}',
            		now()
            	);";

        return mysqli_query($this->connection, $query);
        
	}
}