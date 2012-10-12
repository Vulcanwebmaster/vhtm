<?php 
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/CustodianBLL.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perfect Funds Solutions Ltd</title>
<link rel="stylesheet" href="../css/redmond/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" href="../css/styles.css" />
<link rel="stylesheet" href="../css/pagination.css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="../js/jquery.pagination.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/custodian.js"></script>

<style type="text/css">
		input.text { width:95%; padding: .4em; }
		select.text { width:100%; padding: .2em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain {  width: 610px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 600px; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; font-size:0.85em;  }
		.ui-button { outline: 0; margin:0; padding: .1em ; text-decoration:none;  !important; cursor:pointer; position: relative; text-align: center; }
		.ui-dialog .ui-state-highlight, .ui-dialog .ui-state-error { padding: .3em;  }
		#searchtable th{ font-size:0.85em;}
		#searchtable select, #searchtable input{font-size:0.85em;}
	</style>
<?php 

$objCustodian=new CustodianClass($db);

if(isset($_POST['Search']) && $_POST['Search']=="Search"){
	if(isset($_POST['search_custid']) && $_POST['search_custid']!=""){
		$objCustodian->custodianid=$_POST['search_custid'];
	}
	
	if(isset($_POST['search_cust']) && $_POST['search_cust']!=""){
		$objCustodian->custodian=$_POST['search_cust'];
	}
	
	if(isset($_POST['search_ta']) && $_POST['search_ta']!=""){
		$objCustodian->transferagent=$_POST['search_ta'];
	}
	
}

echo $objCustodian->GetCustodianUsingJSON();

?>
<script type="text/javascript">
function initPagination() {
	// count entries inside the hidden content
	var num_entries = JSONCustodian.length;
	// Create content inside pagination element
	$("#Searchuser").pagination(num_entries, {
		callback: pageselectCallback,
		items_per_page:25 // Show only one item per page
	});
 }

var temp=0;
function pageselectCallback(page_index, jq){
	// Get number of elements per pagionation page from form
	var items_per_page = 25;
	var max_elem = Math.min((page_index+1) * items_per_page, JSONCustodian.length);
	var newcontent = '';
	
	// Iterate through a selection of the content and build an HTML string
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{
		//alert(i);
		newcontent+="<tr class='result'>";
		newcontent += '<td>  <a style=\'text-decoration:underline; cursor:pointer;\' onclick=ViewCustodian(' + JSONCustodian[i].id+')>'+JSONCustodian[i].id + '</a></td>';
		newcontent += '<td>' + JSONCustodian[i].custodianid + '</td>';
		newcontent += '<td>' + JSONCustodian[i].custodian + '</td>';
		newcontent += '<td>' + JSONCustodian[i].biccustodian + '</td>';
		newcontent += '<td>' + JSONCustodian[i].acwithcust + '</td>';
		newcontent += '<td>' + JSONCustodian[i].transferagent + '</td>';
		newcontent += '<td>' + JSONCustodian[i].bicta + '</td>';
		newcontent += '<td>' + JSONCustodian[i].acwithta + '</td>';
		newcontent+="</tr>";
	}
	
	// Replace old content with new content
	if(temp<2){
		//alert(temp);
		$('#users').append(newcontent);
		
	}
	else
	{
		//alert("else");
		//alert($('#countrys').length);
		$('#users tbody tr').remove();
		$('#users').append(newcontent);
	}
	temp++;
	// Prevent click event propagation
	return false;
}

</script>
</head>
<body onload="loadAll();">
<div id="main_cont">
        <div id="title">
            <img src="../ZEIT8.jpg" alt="" /></div>
        <div id="left">
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 1</p>
                <a class="menu" href="accounts.php">ACCOUNTS</a>
                <a class="menu" href="custody.php">CUSTODY ACCOUNTS</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 2</p>
                <a class="menu" href="isins.php">ISINS</a> 
		<a class="menu" href="user.php">USERS</a> 
		<a class="menu" href="security.php">PORTFOLIO HOLDINGS</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 3</p>
                <a class="menu" href="transfer.php">TRANSFERS</a> 
            </div>
        </div>
    <div id="content">
    	<h1 align="center" style="clear:both; margin:0px; padding:0px;">User Management</h1>
        
      <fieldset style="border:1px solid #CCC; width:610px; margin:0px; padding:0px;">
   	    <legend>Search</legend>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
          <table id="searchtable" width="600" border="0" cellspacing="1" cellpadding="2">
            <tr>
              <th align="right">CUST-ID</th>
              <td><label for="search_custid"></label>
              <input name="search_custid" type="text" id="search_custid" size="5" /></td>
              <th align="right">CUSTODIAN</th>
              <td><input name="search_cust" type="text" id="search_cust" size="15" /></td>
              <th align="right">TRANSFER AGENT</th>
                <td><input name="search_ta" type="text" id="search_ta" size="10" /></td>
                <th align="right">
                <input type="submit" class="ui-button ui-state-default ui-corner-all" name="Search" id="Search" value="Search" />
                <input type="button" id="create-custodian" class="ui-button ui-state-default ui-corner-all" value="New Custodian" />
                </th>
            </tr>
          </table>
		</form>
      </fieldset>
    	<div id="users-contain" class="ui-widget" style="clear:both; float:left; margin:0px; padding:0px; padding-top:5px;">
            <div id="Searchuser">This content will be replaced when pagination inits.</div>
            <table id="users" class="ui-widget ui-widget-content">
                <thead>
                    <tr class="ui-widget-header ">
                    	<th>ID</th>
                        <th>CUST-ID</th>
                        <th>CUSTODIAN</th>
                        <th>BIC (CUST)</th>
                        <th>AC (CUST)</th>
                        <th>TA</th>
                        <th>BIC (TA)</th>
                        <th>AC (TA)</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
        
    	<div id="dialog" title="Create / Edit Custodian">
            <p id="validateTips">&nbsp;</p>
        
            <form>
            <fieldset>
            <table width="500" border="0" cellspacing="0" cellpadding="0">
             <tr>
            <th align="left" valign="top">CUSTODIAN Id <span class="red">*</span></th>
            <td><input type="text" name="custodianid" id="custodianid" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">CUSTODIAN <span class="red">*</span></th>
            <td><input type="text" name="custodian" id="custodian" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">bic CUSTODIAN</th>
            <td><input type="text" name="biccustodian" id="biccustodian" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">ac WITH cUSTODIAN<span class="red"></span></th>
            <td><input type="text" name="acwithcust" id="acwithcust" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">TRANSFER AGENT<span class="red"> (tA)</span></th>
            <td><input type="text" name="transferagent" id="transferagent" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          
           <tr>
            <th width="150" align="left" valign="top">bic (ta)</th>
            <td><input type="text" name="bicta" id="bicta" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="150" align="left" valign="top">ac WITH ta<span class="red"></span></th>
            <td><input type="text" name="acwithta" id="acwithta" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="150" align="left" valign="top">pOSTAL ADDRESS a<span class="red"></span></th>
            <td><input type="text" name="postala" id="postala" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="150" align="left" valign="top">pOSTAL ADDRESS b<span class="red"></span></th>
            <td><input type="text" name="postalb" id="postalb" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          
          <tr>
            <th width="150" align="left" valign="top">zip cITY<span class="red"></span></th>
            <td><input type="text" name="zipcity" id="zipcity" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">kEY cONTACT pERSON (a)<span class="red"></span></th>
            <td><input type="text" name="keya" id="keya" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">eMAIL ADDRESS (A)</th>
            <td><input type="text" name="emaila" id="emaila" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">kEY cONTACT pERSON (b)</th>
            <td><input type="text" name="keyb" id="keyb" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">eMAIL aDDRESS (b)</th>
            <td><input type="text" name="emailb" id="emailb" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">pHONE NUMBER (cUST)</th>
            <td><input type="text" name="phone" id="phone" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">fAX</th>
            <td><input type="text" name="fax" id="fax" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">sETTLEMENT dETAILS (a)</th>
            <td><input type="text" name="settlementa" id="settlementa" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">sETTLEMENT dETAILS (b)</th>
            <td><input type="text" name="settlementb" id="settlementb" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">sETTLEMENT dETAILS (c)</th>
            <td><input type="text" name="settlementc" id="settlementc" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">aCCOUNT nUMBER (cUST)</th>
            <td><input type="text" name="accountcust" id="accountcust" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">&nbsp;</th>
            <td><input id="hdid" name="hdid" type="hidden" value="" /></td>
          </tr>
            </table>
                
                
            </fieldset>
            </form>
        </div>
        
	</div>
     <div id="right">
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 4</p>
                <a class="menu" href="trade.php">TRADES</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 5</p>
                <a class="menu" href="contact-menu.php" target="_top">CONTACT FORM</a> <a class="menu"
                    href="#">LIVE SUPPORT</a> <a class="menu" href="otrs.php">OPEN A TICKET</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    MENU 6</p>
                <a class="menu" href="logout.php" target="_top">LOGOUT</a>
            </div>
        </div>

</body>

</html>