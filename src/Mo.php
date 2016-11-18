<?php

Namespace Carneiro;

Use Carneiro\Token;
Use Carneiro\DAO\MoDao;
Use Carneiro\Database\MySQL;

/**
* Mobile Originated Class
*/
class Mo 
{
	
	private $msisdn;
	private $operatorid;
	private $shortcodeid;
	private $text;
	private $authToken;
	private $created_at;
	private $params;
	public $isTokenSet;

	function __construct($params)
	{
		$this->msisdn = $params['msisdn'];
		$this->operatorid = $params['operatorid'];
		$this->shortcodeid = $params['shortcodeid'];
		$this->text = $params['text'];
		$this->params = $params;
	}

	
	/**
	 * setting the Authentication Token
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function setAuthenticationToken()
	{
		$token = new Token();
		$this->authToken = $token->generateAuthToken($this->params);

		$this->isTokenSet = $this->authToken ? True : False;
	}

	/**
	 * setter to msisdn
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function setMsisdn($msisdn)
	{
		$this->msisdn = $msisdn;
	}

	/**
	 * setter to operatorid
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function setOperatorid($operatorid)
	{
		$this->operatorid = $operatorid;
	}

	/**
	 * setter to shortcodeid
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function setShortcodeid($shortcodeid)
	{
		$this->shortcodeid = $shortcodeid;
	}

	/**
	 * setter to text
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function setText($text)
	{
		$this->text = $text;
	}

	/**
	 * getter to msisdn
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getMsisdn()
	{
		return $this->msisdn;
	}

	/**
	 * getter to operatorid
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getOperatorid()
	{
		return $this->operatorid;
	}

	/**
	 * getter to shortcodeid
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getShortcodeid()
	{
		return $this->shortcodeid;
	}

	/**
	 * getter to text
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getText()
	{
		return $this->text;
	}

	/**
	 * getter to authtoken
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getAuthtoken()
	{
		return $this->authToken;
	}		

	/**
	 * getter to created_at
	 *
	 * @return string
	 * @author Frederico Carneiro
	 **/
	function getCreatedAt()
	{
		return $this->created_at;
	}				

	/**
	 * Save MO to Database
	 *
	 * @return void
	 * @author Frederico Carneiro
	 **/
	function saveToDatabase()
	{
		$moDAO = new MoDao(new MySQL());
		return $moDAO->save($this);
	}

}