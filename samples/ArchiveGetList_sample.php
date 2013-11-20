<?php

require_once 'YMLP_API.class.php';

// variables: your key & username
$ApiKey = "YourAPIKey";
$ApiUsername = "YourUsername";


// create API class
$api = new YMLP_API($ApiKey,$ApiUsername);

// run command
$Page = '';
$NumberPerPage = '';
$StartDate = '';
$StopDate = '';
$Sorting = '';
$ShowTestMessages = '';

$output=$api->ArchiveGetList($Page , $NumberPerPage , $StartDate , $StopDate , $Sorting , $ShowTestMessages);

// output results
if ( $api->ErrorMessage ) {
	echo "There's a connection problem: " . $api->ErrorMessage;
}
else {
	if ( isset($output["Code"]) ) {
		echo "{$output["Code"]} => {$output["Output"]}";
	}
	elseif (!count($output)) {
		echo "No data available";
		}
	else {
		foreach ($output as $item) {
			foreach ($item as $key=>$value) {
				echo $key . ":". $value . ",";
				}
			echo "<br>"; 
		}
	}
}

?> 