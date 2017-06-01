<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Payssion test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <b>Choose payment method:</b>
    <div class="row">
    <div class="col-sm-3"><img src="images/alipay.png"></div>
    <div class="col-sm-3"><img src="images/unionpay.png"></div>
    <div class="col-sm-3"><img src="images/tenpay.png"></div>
    <div class="col-sm-3"></div>
    </div>
    <br>
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