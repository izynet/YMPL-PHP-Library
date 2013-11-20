<?php

require_once 'YMLP_API.class.php';

// variables: your key & username
$ApiKey = "YourAPIKey";
$ApiUsername = "YourUsername";

// create API class
$api = new YMLP_API($ApiKey,$ApiUsername);

// run command
$Subject = 'in flanders fields';
$HTML = '';
//$Text = 'test';
$DeliveryTime = '';
$FromID = '';
$TrackOpens = '';
$TrackClicks = '';
$TestMessage = '1';
$GroupID = '';
$FilterID = '';
$CombineFilters = '';

$output=$api->NewsletterSend($Subject, $HTML, $Text, $DeliveryTime, $FromID, $TrackOpens, $TrackClicks, $TestMessage, $GroupID, $FilterID, $CombineFilters );

// output results
if ( $api->ErrorMessage ) {
	echo "There's a connection problem: " . $api->ErrorMessage;
} else {
	echo "{$output["Code"]} => {$output["Output"]}";
}

?> 