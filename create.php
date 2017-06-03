<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("./lib/PayssionClient.php");

//$payssion = new PayssionClient('your api key', 'your secretkey');
//please uncomment the following if you use sandbox api_key
$api_key = $_POST['api_key'];
$api_sig = $_POST['api_sig'];
$amount = $_POST['amount'];
$pm_id = $_POST['method'];
$currency = $_POST['currency'];
$order_id = $_POST['order_id'];
$description = $_POST['description'];
$return_url = $_POST['return_url'];
$payssion = new PayssionClient($api_key, $api_sig);

$response = null;

try {
	$response = $payssion->create(array(
			'amount' => $amount,
			'currency' => $currency,
			'pm_id' => $pm_id,
			'description' => $description,
			'order_id' => $order_id,          //your order id
			'return_url' => $return_url   //optional, the return url after payments (for both of paid and non-paid)
	));
} catch (Exception $e) {
	//handle exception
	echo "Exception: " . $e->getMessage();
}

if ($payssion->isSuccess()) {
	//handle success
	$todo = $response['todo'];
	if ($todo) {
		$todo_list = explode('|', $todo);
		if (in_array("redirect", $todo_list)) {
		    //redirect the users to the redirect url or send the url by email
		    $paylink = $response['redirect_url'];
		   // echo $paylink;
		   header('Location: '.$paylink);
	    }
	} else {
	//just in case, should not be here
	echo "just in case, should not be here";
	}
} else {
	echo "handle failed";
}