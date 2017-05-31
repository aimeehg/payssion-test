<?php

//$payssion = new PayssionClient('your api key', 'your secretkey');
//please uncomment the following if you use sandbox api_key
$payssion = new PayssionClient('27bc67440271d7a3', '3f03896fa5fceb1ca6edafe5a6e2583a', false);

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