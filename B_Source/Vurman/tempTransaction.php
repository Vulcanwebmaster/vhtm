<?php 
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/Transfer_BLL.php');

$objTransfer=new TransferClass($db);
$objTransfer->id_client=1;
$objTransfer->id_isin=1;
$objTransfer->fund_name="ABC";
$objTransfer->amount=5000;
$objTransfer->id_custody1="sdfsdf sdfs";
$objTransfer->trade_date="2011-06-10";
$objTransfer->settlement_date="2011-06-11";
$objTransfer->partner="ssdkfsldf";
$objTransfer->custodian="sdfsdfsdf";
$objTransfer->custody2="sdfggg";
$objTransfer->transfer_agent="aa fff";
$objTransfer->custody3="ad sdfsd";
$objTransfer->comment="";
$objTransfer->bic1="";
$objTransfer->bic2="";
$objTransfer->bic3="";
$objTransfer->types="purchase";
$objTransfer->status="pending";
$objTransfer->transaction_type="receive";
$msg=$objTransfer->InsertTransfer();

echo $msg;

?>