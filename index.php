<form name="payssion_payment" action="samples/sample_postback.php" method="post">
    <input type="hidden" name="api_key" value="6eac014c862c695c">
    <input type="hidden" name="api_sig" value="98147c9bf749c14bbdba00744d08a7a4">
    <input type="hidden" name="pm_id" value="alipay_cn">
    <input type="hidden" name="order_id" value="123">
    <input type="hidden" name="description" value="Charge for test">
    <input type="hidden" name="amount" value="12.00">
    <input type="hidden" name="currency" value="USD">
    <input type="hidden" name="return_url" value="http://sandbox.payssion.com/demo/afterpayment">
    <input type ="submit" value ="Submit">
</form>