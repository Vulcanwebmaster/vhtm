<?php 
require_once('../../core/connect.php');
require_once('../../core/CoreClass.php');
require_once('../../BLL/CustodianBLL.php');

$userid="";
$name="";
$email="";
$loginid="";
$pass="";
$active=0;
$msg="";

$objCustodian=new CustodianClass($db);

if(isset($_POST['custodian']) && $_POST['custodian']!=""){
	$custodian=$_POST['custodian'];
	$objCustodian->custodian=$custodian;
}
else{
	echo "Custodian is Blank.";
	return;
}


if(isset($_POST['custodianid'])&&$_POST['custodianid']!=""){
	 $custodianid=$_POST['custodianid'];
	 $objCustodian->custodianid=$custodianid;
}
else{
	echo "Custodian Id is Blank.";
	return;
}

if(isset($_POST['biccustodian'])&&$_POST['biccustodian']!=""){ $objCustodian->biccustodian=$_POST['biccustodian']; } else{ $objCustodian->biccustodian=""; }
if(isset($_POST['acwithcust'])&&$_POST['acwithcust']!=""){ $objCustodian->acwithcust=$_POST['acwithcust']; } else{ $objCustodian->acwithcust=""; }
if(isset($_POST['transferagent'])&&$_POST['transferagent']!=""){ $objCustodian->transferagent=$_POST['transferagent']; } else{ $objCustodian->transferagent=""; }
if(isset($_POST['bicta'])&&$_POST['bicta']!=""){ $objCustodian->bicta=$_POST['bicta']; } else{ $objCustodian->bicta=""; }
if(isset($_POST['acwithta'])&&$_POST['acwithta']!=""){ $objCustodian->acwithta=$_POST['acwithta']; } else{ $objCustodian->acwithta=""; }
if(isset($_POST['postala'])&&$_POST['postala']!=""){ $objCustodian->postal_address_a=$_POST['postala']; } else{ $objCustodian->postal_address_a=""; }
if(isset($_POST['postalb'])&&$_POST['postalb']!=""){ $objCustodian->postal_address_b=$_POST['postalb']; } else{ $objCustodian->postal_address_b=""; }
if(isset($_POST['zipcity'])&&$_POST['zipcity']!=""){ $objCustodian->zip_city=$_POST['zipcity']; } else{ $objCustodian->zip_city=""; }
if(isset($_POST['keya'])&&$_POST['keya']!=""){ $objCustodian->key_contact_person_a_cu=$_POST['keya']; } else{ $objCustodian->key_contact_person_a_cu=""; }
if(isset($_POST['emaila'])&&$_POST['emaila']!=""){ $objCustodian->email_address_a=$_POST['emaila']; } else{ $objCustodian->email_address_a=""; }
if(isset($_POST['keyb'])&&$_POST['keyb']!=""){ $objCustodian->key_contact_person_b=$_POST['keyb']; } else{ $objCustodian->key_contact_person_b=""; }
if(isset($_POST['emailb'])&&$_POST['emailb']!=""){ $objCustodian->email_address_b=$_POST['emailb']; } else{ $objCustodian->email_address_b=""; }
if(isset($_POST['phone'])&&$_POST['phone']!=""){ $objCustodian->phone_number_cu=$_POST['phone']; } else{ $objCustodian->phone_number_cu=""; }
if(isset($_POST['fax'])&&$_POST['fax']!=""){ $objCustodian->fax_number=$_POST['fax']; } else{ $objCustodian->fax_number=""; }
if(isset($_POST['settlementa'])&&$_POST['settlementa']!=""){ $objCustodian->settlement_details_a=$_POST['settlementa']; } else{ $objCustodian->settlement_details_a=""; }
if(isset($_POST['settlementb'])&&$_POST['settlementb']!=""){ $objCustodian->settlement_details_b=$_POST['settlementb']; } else{ $objCustodian->settlement_details_b=""; }
if(isset($_POST['settlementc'])&&$_POST['settlementc']!=""){ $objCustodian->settlement_details_c=$_POST['settlementc']; } else{ $objCustodian->settlement_details_c=""; }
if(isset($_POST['accountcust'])&&$_POST['accountcust']!=""){ $objCustodian->account_number_cu=$_POST['accountcust']; } else{ $objCustodian->account_number_cu=""; }


if(isset($_POST['id'])&&$_POST['id']!=""){
	 $id=$_POST['id'];
	 $objCustodian->id=$id;
	 $msg=$objCustodian->UpdateCustodian();
}
else
{
	$msg=$objCustodian->InsertCustodian();
}
echo $msg."|".$objCustodian->id;
?>