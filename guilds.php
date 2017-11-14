<?php

// Read JSON file
$json = file_get_contents('./guilds.json');

$json_data = json_decode($json,true);

$temp = array();
$temp["data"] = array();
#print "[";
foreach ($json_data as $key1 => &$value1) {
	$value1['name'] = $key1;
	#print json_encode($value1);
	#print ",";
	$temp["data"][] = $value1;
}

#print "]";
print json_encode($temp);
?>
