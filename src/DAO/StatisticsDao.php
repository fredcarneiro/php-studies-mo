<?php

Namespace Carneiro\DAO;

Use Carneiro\DAO\StatisticsDaoInterface;
Use Carneiro\Database\DatabaseConnection;

class StatisticsDao implements StatisticsDaoInterface
{
	
	private $connection;

	function __construct(DatabaseConnection $conn)
	{
		$this->connection = $conn->connect();
	}

	/**
	 * Gives the amount of MO by a time span
	 *
	 * @return int
	 * @author Frederico Carneiro
	 **/
	function moCountByTime(\DateTime $time_span){

		$query = "select count(*) from mo where created_at > '{$time_span->format("Y-m-d H:i:s")}' ";
		$result = mysqli_query($this->connection, $query);
		return current(mysqli_fetch_array($result));
	}	

	/**
	 * Gives the amount of time by a MO count
	 *
	 * @return int
	 * @author Frederico Carneiro
	 **/
	function timeSpanByCount($count){
		
		$query = "SELECT min(created_at), max(created_at) from mo order by id DESC limit {$count}";
		$result = mysqli_query($this->connection, $query);
		return mysqli_fetch_array($result);
	}	




}