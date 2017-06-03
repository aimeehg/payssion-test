<?php
// Send an empty HTTP 200 OK response to acknowledge receipt of the notification
header('HTTP/1.1 200 OK');
 
$api_key  = '6eac014c862c695c'; //your api key
$secret_key = '98147c9bf749c14bbdba00744d08a7a4'; //your secret key

// Assign payment notification values to local variables
/*
app_name: Your app name.
pm_id: The Payment method id. See the pm_id list list for details
transaction_id: Payssion transaction id
order_id
amount
paid: The amount which the user has paid
net: The amount after decucting the fees
currency
description
state: See the payment state list for details
notify_sig: The notify signature. You must validate the signaure before 
*/
$pm_id = $_POST['pm_id'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$order_id = $_POST['order_id'];
$state = $_POST['state'];

$check_array = array(
		$api_key,
		$pm_id,
		$amount,
		$currency,
		$order_id,
		$state,
		$secret_key
);

$check_msg = implode('|', $check_array);
$check_sig = md5($check_msg);
$notify_sig = $_POST['notify_sig'];
if ($notify_sig == $check_sig) {
	//handle payment notification
	switch ($state) {
		case 'completed':
			//$order_id should be your order id
			//update the order as paid
			echo "completed";
			break;
		case 'paid_partial':
			//this is rare case if it goes here
			break;
		case 'pending':
        	echo "pending";
			break;
		case 'failed':	
            echo 'failed';        
			break;
		case 'expired':	
        echo "expired";	
			break;
		case 'error':
        echo 'error';
			break;
		default:
        echo 'default';
			//please refer to the following URL for more states:
			//https://payssion.com/en/docs/#api-reference-payment-notifications
			break;
	}
}
