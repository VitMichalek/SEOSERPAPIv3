<?php

class SEOSERPAPI{
	static $apiToken = "";
	static $apiUrl = "https://www.seoserpapi.com/api/";
	static function send($api="",$data=array()){
		if(SEOSERPAPI::$apiToken != "" && $api != ""){			
			$post = array('data' => $data,'token'=> SEOSERPAPI::$apiToken);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, SEOSERPAPI::$apiUrl.$api);
			curl_setopt($ch, CURLOPT_POST,1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
			$result = curl_exec ($ch);			
			curl_close($ch);
			
			return json_decode($result,true);			
		}else{
			echo "errro 2";
		}
	}
	
	static function get($api="",$data=array()){
		if(SEOSERPAPI::$apiToken != "" && $api != ""){			
			$post = array('data' => $data,'token'=> SEOSERPAPI::$apiToken);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,SEOSERPAPI::$apiUrl.$api);
			curl_setopt($ch, CURLOPT_POST,1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
			$result=curl_exec ($ch);
			curl_close ($ch);
			
			return $result;			
		}else{
			"error 1";
		}
	}
}

?>