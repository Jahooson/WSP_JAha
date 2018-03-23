<?php

// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'testkey', FILTER_SANITIZE_URL);

if(empty($page))
	echo "Det finns inget i testkey";
else if($page=="value")
	echo "Det finns ett värde under testkey";
else
	echo "Det finns ett värde som inte känns igen";
?>
