<?php

namespace Carneiro\DAO;

use Carneiro\Mo;

/**
* Mobile Originated DAO Interface
*/
interface MoDaoInterface 
{
	 /**
	 * save MO to database
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	public function save(Mo $mo);
}