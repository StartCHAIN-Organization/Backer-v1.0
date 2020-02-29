
<?php
//session_start();
//$_SESSION['test']='something';
if($_POST){
	$fields=array(
		"user"=>"something",
		"pass"=>"sfjbsdkhgb",
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'session.txt');
	curl_setopt($ch,CURLOPT_URL, "http://3.92.187.67/multichain-web-demo/test.php");
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch,CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'session.txt');
	$data=curl_exec ($ch);
	curl_close($ch);

	//curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);

	//$output=shell_exec($_POST['data']);
	//echo $output;
	//echo "somethin2g";
} else {

	echo "gdsgsg";
}


?>

