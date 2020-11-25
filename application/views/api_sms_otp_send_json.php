<?php
ob_start();
// setting 
$apikey      = 'caa83b1683db5b682ee68ed9f2590d6f'; // api key 
$urlendpoint = 'http://sms114.xyz/sms/api_sms_otp_send_json.php'; // url endpoint api
$callbackurl = ''; // url callback get status sms 

// create header json  
$senddata = array(
	'apikey' => $apikey,  
	'callbackurl' => $callbackurl, 
	'datapacket'=>array()
);

// create detail data json 
// data 1
$number='6289617271499';
$message='Message 1';
array_push($senddata['datapacket'],array(
	'number' => trim($number),
	'message' => $message
));
// sending  
$data=json_encode($senddata);
$curlHandle = curl_init($urlendpoint);
curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $data);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($data))
);
curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 30);
$respon = curl_exec($curlHandle);
curl_close($curlHandle);
header('Content-Type: application/json');
echo $respon;
?>
