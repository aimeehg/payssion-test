<?php
$msg = implode('|', array('6eac014c862c695c', 'oxxo_mx', "1.00", "USD","123", "98147c9bf749c14bbdba00744d08a7a4"));
$api_sig = md5($msg);
echo $api_sig;
?>