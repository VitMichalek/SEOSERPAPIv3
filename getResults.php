<?

include "seoserpapi.php";

//$uuid is id createt and returned on setTask!
//where in setTask define pingback_url  send $uuid in $_GET["uuid"];

$postArray = array(
	"uuid"=>"YYY"
);

SEOSERPAPI::$apiToken = "XXXX";
$result = SEOSERPAPI::get("v3/getResults/",$postArray);

echo $result;
?>