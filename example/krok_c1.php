<?php
// Založení tasku do systému

include "../seoserpapi.php"; //API CORE
SEOSERPAPI::$apiToken = "XXX";


$poleDomen = array(
	"urls"=>array()
);
//máme tabulku s doménami   id_domeny, url_domeny, backlinks, refdomain etc.
//uděláme select
// 

$sql = mysqli_query("select id_domeny,url_domeny from tabulkadomen");
while($row=mysqli_fetch_array($sql)){
	$poleDomen["urls"][] = array(
		"url" => $row["url_domeny"],
		"id" => $row["id_domeny"]
	);
}

//pingback_url se nastavuje pokud chceš at ti automaticky při dokončení ukoly zavoláme nějaký skript na tvé doméně
// k url např "https://www.pingbackurl.com/task.php" automaticky přidáme UUID parametr v GETu 

$poleDomen["pingback_url"] = "https://www.pingbackurl.com/pingtask.php";


$result = SEOSERPAPI::send("v3/setLinkMetrics/",$poleDomen);

if(is_array($result)){
	if($result["status"] == 200){
		$uuid = $result["uuid"];//uuid for getResults/checkstatus
		//někam si uložím toto UUID, pokd kterým je uložen task ke zpracování, tímto UUID se pak stáhnout data
	}else{
		//je možné že nastane nějaký error - malo kreditů, prázdné poleDomen atd.
		echo $result["error"];
	}
}else{
	echo "Error";//Chyba v odpovědi, špatná struktura odpobědi, něco je hodně špatně --toto by nemělo nikdy nastat
}

// následuje krok č.2.
?>