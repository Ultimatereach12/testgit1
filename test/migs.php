<?php
$testarr = array(
"vpc_Amount" => $finalprice*100,//Final price should be multifly by 100
"vpc_AccessCode" => "1234ABCD",//Put your access code here
"vpc_Command"=> "pay",
"vpc_Locale"=> "en",
"vpc_MerchTxnRef"=> "CLI".$session_id, //This should be something unique number, i have used the session id for this
"vpc_Merchant"=> "TEST111111111111",//Add your merchant number here
"vpc_OrderInfo"=> "XXX".$session_id,//this also better to be a unique number
"vpc_ReturnURL"=> "http://mysite.com/response.php",//Add the return url here so you have to code here to capture whether the payment done successfully or not
"vpc_Version"=> "1");

ksort($testarr); // You have to ksort the arry to make it according to the order that it needs

$SECURE_SECRET = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";//Add the secure secret you have get

$securehash = $SECURE_SECRET;
$url = "";
foreach ($testarr as $key => $value)
{
$securehash .= $value;
$url .= $key."=".urlencode($value)."&";
}

$securehash = md5($securehash);//Encoding
$url .= "vpc_SecureHash=".$securehash;

header("location:https://migs.mastercard.com.au/vpcpay?$url");