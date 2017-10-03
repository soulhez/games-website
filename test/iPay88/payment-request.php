<!DOCTYPE html>
<html>
<head>
	<title>iPay88 Payment Request</title>
</head>
<body>

<?php
// iPay88 OPSG SANDBOX posting URL (payment page)
// SANBOX: https://sandbox.ipay88.com.ph/epayment/entry.asp

// iPay88 OPSG PRODUCTION posting URL (payment page)
// PRODUCTION: https://payment.ipay88.com.ph/epayment/entry.asp

// iPay88 OPSG payment re-query
// URL: https://payment.ipay88.com.ph/epayment/enquiry.asp

// SIGNATURE GENERATOR TESTER
// https://payment.ipay88.com.ph/epayment/testing/TestSignature.asp
?>

<FORM method="post" name="ePayment" action="https://sandbox.ipay88.com.ph/epayment/entry.asp">
	<INPUT type="hidden" name="MerchantCode" value="PH00419">
	<INPUT type="hidden" name="PaymentId" value="1">
	<INPUT type="hidden" name="RefNo" value="A00000001">
	<INPUT type="hidden" name="Amount" value="25.00">
	<INPUT type="hidden" name="Currency" value="PHP">
	<INPUT type="hidden" name="ProdDesc" value="Photo Print">
	<INPUT type="hidden" name="UserName" value="Frederick de Guzman">
	<INPUT type="hidden" name="UserEmail" value="frederick@glyphgames.com">
	<INPUT type="hidden" name="UserContact" value="09062846807">
	<INPUT type="hidden" name="Remark" value="">
	<INPUT type="hidden" name="Lang" value="UTF-8">
	<INPUT type="hidden" name="Signature" value="v4f93AFaktObj79KywOlXbLAeTc=">
	<INPUT type="hidden" name="ResponseURL" value="https://glyphgames.com/test/iPay88/response.php">
	<INPUT type="hidden" name="BackendURL" value="https://glyphgames.com/test/iPay88/backend_response.php">
	<INPUT type="submit" value="Proceed with Payment" name="Submit">
</FORM>

</body>
</html>