<?

include "seoserpapi.php";


$postArray = array(
	"uuid"=>"YYY"
);
SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::get("v3/check/",$postArray);

print_r(json_decode($result,true));

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