<?php

Namespace Carneiro;

Use Carneiro\DAO\StatisticsDao;
Use Carneiro\Database\MySQL;

/**
* statistics class for the stats.php report
*/
class Statistics
{

	
	private $statisticsDao;

	function __construct()
	{
		$this->statisticsDao = New StatisticsDao(new MySQL);
	}

	/**
	 *  Gives the report By time and By Count.
	 *
	 * @return Report
	 * @author Frederico Carneiro
	 **/
	function generateReportByTimeByCount(\DateTime $time, $count)
	{
		$response = array();

		$response['last_15_min_mo_count'] = $this->generateReportByTime($time);
		$response['time_span_last_10k']  = $this->generateReportbyCount($count);

		return json_encode($response)."\n"; 

	}

	function generateReportByTime(\DateTime $time)
	{
		return $this->statisticsDao->moCountByTime($time);
	}

	function generateReportbyCount($count)
	{
		return $this->statisticsDao->timeSpanByCount($count);
	}

}