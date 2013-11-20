<?php

require_once 'YMLP_API.class.php';

// variables: your key & username
$ApiKey = "YourAPIKey";
$ApiUsername = "YourUsername";

// create API class
$api = new YMLP_API($ApiKey,$ApiUsername);

// run command
$Email = "dummy@dummy.com";

$output=$api->ContactsUnsubscribe($Email);

// output results
if ($api->ErrorMessage){
	echo "There's a connection problem: " . $api->ErrorMessage;
} else {
	echo "{$output["Code"]} => {$output["Output"]}";
}


?> 