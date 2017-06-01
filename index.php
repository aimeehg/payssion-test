<form name="payssion_payment" action="http://sandbox.payssion.com/payment/create.html" method="post">
    <input type="hidden" name="api_key" value="e22c0ee69230ca35">
    <input type="hidden" name="api_sig" value="f260d9d2d1edecc091a239695a007da2">
    <input type="hidden" name="pm_id" value="alipay_cn">
    <input type="hidden" name="order_id" value="123">
    <input type="hidden" name="description" value="Charge for test">
    <input type="hidden" name="amount" value="1.00">
    <input type="hidden" name="currency" value="USD">
    <input type="hidden" name="return_url" value="http://sandbox.payssion.com/demo/afterpayment">
    <input type ="submit" value ="Submit">
</form>