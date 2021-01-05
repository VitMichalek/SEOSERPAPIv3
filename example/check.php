<?

include "seoserpapi.php";


$postArray = array(
	"uuid"=>"YYY"
);
SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::get("v3/check/",$postArray);
$data = json_decode($result,true);
if($data["status"] == "200"){
	if($data[0]["status"] == "H"){
		//getResults.php
	}else{
		//task isnt ready for download
	}
}else{
	print_r($result);
}

/*

Array
(
    [status] => 200
    [results] => Array
        (
            [0] => Array
                (
                    [uuid] => 33080916-0EC8-43DD-BDC6-42442DCDD939
                    [status] => C  //A is ready for download
                )

        )

)
*/

?>