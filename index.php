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
    <style>
    td {
    padding: 15px;
    }

.alipay{background-image:url(images/alipay.png);}
.unionpay{background-image:url(images/unionpay.png);}
.tenpay{background-image:url(images/tenpay.png);}

.payment-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}

.payment-selector input:active +.payment{opacity: .9;}
.payment-selector input:checked +.payment{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.payment{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.payment:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}
* { font-family:monospace; }
    </style>
    </head>
    <body>
    <b>Choose payment method:</b>
    <div class="row">
    <form name="payssion_payment" action="result.php" method="post">
        <div class="col-sm-4">
            <div class="payment-selector">
            <input checked="checked" id="alipay" type="radio" name="method" value="alipay" />
            <label class="payment alipay" for="alipay"></label>
            <input id="unionpay" type="radio" name="method" value="unionpay" />
            <label class="payment unionpay" for="unionpay"></label>
            <input id="tenpay" type="radio" name="method" value="tenpay" />
            <label class="payment tenpay" for="tenpay"></label>
        </div>
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
   <!-- <table>
        <td><img src="images/alipay.png"></td>
        <td><img src="images/unionpay.png"></td>
        <td><img src="images/tenpay.png"></td>
    </table>
    -->
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
    </div>
    <br>
    </body>
</html>