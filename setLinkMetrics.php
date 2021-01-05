<?php

include "seoserpapi.php";


//pingback_url -> to this url send notification when task is ready for download. 
//result ->  JSON

$postArray = array(
	"urls"=>array(
		"0"=>array(
			"url"=>"seoserpapi.com",
			"id"=>"1234"
		),
		"500"=>array(
			"url"=>"semor.cz",
			"id"=>"487988"
		)
	),
	"pingback_url"=>"https://www.pingbackurl.com/task.php"
	

);

SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::send("v3/setLinkMetrics/",$postArray);

if(is_array($result)){
	if($result["status"] == 200){
		$uuid = $result["uuid"];//uuid for getResults
	}else{
		echo $result["error"];
	}
}else{
	echo "Error";
}
echo $uuid; //save this UUID for check status

/*
$postArray = array(
	"uuid"=>$uuid
);

$result = SEOSERPAPI::get("v3/check/",$postArray);
//check.php
*/




?>