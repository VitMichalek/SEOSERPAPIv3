<?php


//kontrola jestli už je task hotovy a připravený ke stažení
// toto můžete mít třeba v CRONu

include "../seoserpapi.php"; //API CORE
SEOSERPAPI::$apiToken = "XXX";

$postArray = array(
	"uuid"=>"YYY"//toto id máme uloženo z kroku č.1
);

$result = SEOSERPAPI::get("v3/check/",$postArray);
$data = json_decode($result,true);
if($data["status"] == "200"){
	if($data[0]["status"] == "H"){
		//task je připraveny ke stažení
		//getResults.php
		$result = SEOSERPAPI::get("v3/getResults/",$postArray);
		$data = json_decode($result, true);//dostanu pole
		if(is_array($data)){
			foreach($data as $i => $poleDomen){
				$url_domeny = $poleDomen["url"];
				$id_domeny = $poleDomen["id"]
				//atd
				/* 
				k dispozici jsou tyto parametry
				"url","backlinks","refdomains","nofollow_backlinks","dofollow_backlinks,"edu_backlinks","gov_backlinks"=>,"url_rank","domain_rank","id"
				
				*/
			}
		}else{
			//chyba při dekodování JSONu
		}
	}else{
		//task ještě nění připravený ke stažení
	}
}else{
	//něčekaná chyby, nemělo by nastat
	print_r($result);
}



?>