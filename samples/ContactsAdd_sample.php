<?php

require_once 'YMLP_API.class.php';

// variables: your key & username
$ApiKey = "YourAPIKey";
$ApiUsername = "YourUsername";

// create API class
$api = new YMLP_API($ApiKey,$ApiUsername);

// run command
$Email = "dummy@dummy.net";
$OtherFields["Field2"]="Dummy Field2";
$OtherFields["Field3"]="Dummy Field3";
$GroupID = "1";
$OverruleUnsubscribedBounced = "0";
$output=$api->ContactsAdd($Email,$OtherFields,$GroupID,$OverruleUnsubscribedBounced);

// output results
if ($api->ErrorMessage){
	echo "There's a connection problem: " . $api->ErrorMessage;
} else {
	echo "{$output["Code"]} => {$output["Output"]}";
}


?> 