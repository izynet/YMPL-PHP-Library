<?php

require_once 'YMLP_API.class.php';

// variables: your key & username
$ApiKey = "YourAPIKey";
$ApiUsername = "YourUsername";


// create API class
$api = new YMLP_API($ApiKey,$ApiUsername);

// run command
$FilterName = '<2009';
$Field = 'Date';
$Operand = 'Before';
$Value = '2009-01-01';

$output = $api->FiltersAdd( $FilterName, $Field, $Operand, $Value );

// output results
if ( $api->ErrorMessage ) {
	echo "There's a connection problem: " . $api->ErrorMessage;
}
else {
	echo "{$output["Code"]} => {$output["Output"]}";
}


?> 