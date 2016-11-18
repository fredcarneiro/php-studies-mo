<?php

Namespace Carneiro;

/**
* Token Class
*/
class Token
{

	/**
	 * Generating the authentication token using the registermo binary
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function generateAuthToken($params)
	{
		
    	$arg = json_encode($params);
    	$token =  `./registermo $params`;

    	if (!$token) {
    		throw new Exception("Error generating the authentication token ", 1);
    	}

    	return $token;
		
	}	

}