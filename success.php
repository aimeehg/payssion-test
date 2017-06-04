<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("./lib/PayssionClient.php");
//$payssion = new PayssionClient('your api key', 'your secretkey');
//please uncomment the following if you use sandbox api_key
$payssion = new PayssionClient('6eac014c862c695c', '98147c9bf749c14bbdba00744d08a7a4');
$order = $_GET['order_id'];
$response = null;
try {
	$response = $payssion->getDetails(array(
			'order_id' => $order,  //your order id
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
	echo "Details: <br>";
    echo "State: $state <br>";
	echo "Amount: $amount $currency <br>";
	echo "Oder id: $order_id <br>";

} else {
	//handle failed
}