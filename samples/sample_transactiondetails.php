<?php

//$payssion = new PayssionClient('your api key', 'your secretkey');
//please uncomment the following if you use sandbox api_key
$payssion = new PayssionClient('6eac014c862c695c', '98147c9bf749c14bbdba00744d08a7a4');

$response = null;
try {
	$response = $payssion->getDetails(array(
			'123' => '123',  //your order id
			));
} catch (Exception $e) {
	//handle exception
	echo "Exception: " . $e->getMessage();
}

if ($payssion->isSuccess()) {
	//handle success
	$transaction = $response['transaction'];
	$pm_id = $transaction['pm_id'];
	$amount = $transaction['amount'];
	$currency = $transaction['currency'];
	$order_id = $transaction['order_id'];
	$state = $transaction['state'];
} else {
	//handle failed
}