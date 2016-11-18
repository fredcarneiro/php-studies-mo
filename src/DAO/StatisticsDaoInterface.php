<?php

namespace Carneiro\DAO;

use \DateTime;

/**
* Statistics DAO Interface
*/
interface StatisticsDaoInterface 
{

	/**
	 * Gives the amount of MO by a time span
	 *
	 * @return int
	 * @author 
	 **/
	function moCountByTime(\DateTime $time_span);

	/**
	 * Gives the amount of time by a MO count
	 *
	 * @return int
	 * @author 
	 **/
	function timeSpanByCount($count);

}