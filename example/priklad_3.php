<?

$domena = "semor.cz";
$url = "https://www.seoserpapi.com/api/v3/liveLinkMetrics/?token=tadybudetvujtoken&domain=".$domena;

$data = json_decode(file_get_contents($url),true);
if($data["status"] == "200"){
	$backlinks = $data["metrics"]["backlinks"];
	$refdomains = $data["metrics"]["refdomains"];
	$nofollow_backlinks = $data["metrics"]["nofollow_backlinks"];
	$dofollow_backlinks = $data["metrics"]["dofollow_backlinks"];
	$edu_backlinks = $data["metrics"]["edu_backlinks"];
	$gov_backlinks = $data["metrics"]["gov_backlinks"];
}else{
	//nějaká chyba
	echo $data["error"];
}

?>