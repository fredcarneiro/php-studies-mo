<?php
require_once 'vendor/autoload.php';

Use Carneiro\Mo;

if (!$_REQUEST) {
	echo '{"status": "No Request"}'."\n";
	die();
}

$accepted_keys = array('msisdn', 'operatorid', 'shortcodeid', 'text');

$request_secure = array_keys($_REQUEST) == $accepted_keys;

if ($request_secure == False) {
	echo '{"status": "Bad Request"}'."\n";
	die();
}

$mo = new Mo($_REQUEST);

$mo->setAuthenticationToken();

if ($mo->isTokenSet) {

	$mo->saveToDatabase() ? $message = '{"status": "ok"}'."\n" : $message = '{"status": "erro saving to database"}'."\n";

}else{
	$message = '{"status": "No Token"}'."\n";		
}

echo $message;
