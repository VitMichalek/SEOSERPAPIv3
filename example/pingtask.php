<?
//skript který je zavolan z našeho systému, automaticky když jsou data připraveny ke stažení
//skript se volá jen 1x
include "./seoserpapi.php";
SEOSERPAPI::$apiToken = "XXXX";

$uuid = $_GET["uuid"];//
$postArray = array(
	"uuid"=>$uuid
);


$result = SEOSERPAPI::get("v3/getResults/",$postArray);//

//zpracujeme data stejně jakov kroku č.2

?>