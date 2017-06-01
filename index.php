<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Payssion test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <form name="payssion_payment" action="https://www.payssion.com/payment/create.html" method="post">
    <input type="hidden" name="api_key" value="6eac014c862c695c">
    <input type="hidden" name="api_sig" value="98147c9bf749c14bbdba00744d08a7a4">
    <input type="hidden" name="pm_id" value="alipay_cn">
    <input type="hidden" name="order_id" value="123">
    <input type="hidden" name="description" value="Charge for test">
    Enter the desired amount:
    <input type="number" name="amount">
    <input type="hidden" name="currency" value="USD">
    <input type="hidden" name="return_url" value="http://sandbox.payssion.com/demo/afterpayment">
    <input type ="submit" value ="Submit">
</form>
    </body>
</html>