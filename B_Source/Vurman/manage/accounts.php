<?php 
require_once('../core/connect.php');
require_once('../core/CoreClass.php');
require_once('../BLL/AccountsBLL.php');
require_once('../BLL/CurrencyBLL.php');
require_once('../BLL/UserBLL.php');

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
<script type="text/javascript" src="../js/account.js"></script>

<style type="text/css">
		input.text { width:95%; padding: .4em; }
		select.text { width:100%; padding: .3em; }
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

$objAccount=new AccountClass($db);

if(isset($_POST['Search']) && $_POST['Search']=="Search"){
	if(isset($_POST['search_name']) && $_POST['search_name']!=""){
		$objAccount->name=$_POST['search_name'];
		//echo $objAccount->name;
	}
	
	if(isset($_POST['search_amount']) && $_POST['search_amount']!=""){
		$objAccount->amount=$_POST['search_amount'];
	}
	
	if(isset($_POST['search_currency']) && $_POST['search_currency']>0){
		$objAccount->id_currency=$_POST['search_currency'];
	}
	
	if(isset($_POST['search_user']) && $_POST['search_user']>0){
		$objAccount->id_client=$_POST['search_user'];
	}
	
}

echo $objAccount->GetAccountUsingJSON();

$objCurrency=new CurrencyClass($db);
echo $objCurrency->GetCurrencyJSON();

$objUser=new UserClass($db);
echo $objUser->GetUserUsingJSON();

?>
<script type="text/javascript">


function initPagination() {
	// count entries inside the hidden content
	var num_entries = JSONAccount.length;
	// Create content inside pagination element
	$("#Searchuser").pagination(num_entries, {
		callback: pageselectCallback,
		items_per_page:10 // Show only one item per page
	});
 }

var temp=0;
function pageselectCallback(page_index, jq){
	// Get number of elements per pagionation page from form
	var items_per_page = 10;
	var max_elem = Math.min((page_index+1) * items_per_page, JSONAccount.length);
	var newcontent = '';
	
	// Iterate through a selection of the content and build an HTML string
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{
		//alert(i);
		newcontent+="<tr class='result'>";
		newcontent += '<td>  <a style=\'text-decoration:underline; cursor:pointer;\' onclick=ViewUser(' + JSONAccount[i].id+')>'+JSONAccount[i].id + '</a></td>';
		newcontent += '<td>' + JSONAccount[i].name + '</td>';
		newcontent += '<td>' + JSONAccount[i].amount + '</td>';
		newcontent += '<td>' + getAccountName(JSONAccount[i].id_currency) + '</td>';
		newcontent += '<td>' + getUserName(JSONAccount[i].id_client) + '</td>';
		newcontent += '<td>' + JSONAccount[i].vdate1 + '</td>';
		newcontent += '<td>' + JSONAccount[i].vdate2 + '</td>';
		/*newcontent += '<td>' + getActive(JSONAccount[i].active) + '</td>';*/
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
           <?php require_once("../include/admin-left-menu.php"); ?>
        </div>
    <div id="content">
    	<h1 align="center">ACCOUNT MANAGEMENT</h1>
        
      <fieldset style="border:1px solid #CCC; width:610px;">
   	    <legend>Search</legend>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
          <table id="searchtable" width="600" border="0" cellspacing="1" cellpadding="2">
            <tr>
              <th width="85" align="right">ACCOUNT NAME</th>
              <td align="left"><label for="search_name"></label>
              <input name="search_name" type="text" id="search_name" size="15" /></td>
              <th width="80" align="right">AMOUNT</th>
              <td align="left"><input name="search_amount" type="text" id="search_amount" size="15" /></td>
              <th width="60" align="right">CURRENCY</th>
              <td align="left"><select name="search_currency" id="search_currency">
                <option value="-1" selected="selected">Select</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select></td>
            </tr>
            <tr>
              <th width="85" align="right">CLIENT</th>
              <td align="left"><select name="search_user" id="search_user">
              </select></td>
              <th width="80" align="right">&nbsp;</th>
              <td align="right" colspan="2">
                <input type="submit" class="ui-button ui-state-default ui-corner-all" name="Search" id="Search" value="Search" />
                <input type="button" id="create-user" class="ui-button ui-state-default ui-corner-all" value="New Account" />
              </td>
            </tr>
          </table>
		</form>
      </fieldset>
    	<div id="users-contain" class="ui-widget" style="clear:both; float:left;">
            <div id="Searchuser">This content will be replaced when pagination inits.</div>
            <table id="users" class="ui-widget ui-widget-content">
                <thead>
                    <tr class="ui-widget-header ">
                    	<th>ID</th>
                        <th>NAME</th>
                        <th>AMOUNT</th>
                        <th>CURRENCY</th>
                        <th>CLIENT</th>
                        <th>VALID 1</th>
                        <th>VALID 2</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
        
    	<div id="dialog" title="Create new Account">
            <p id="validateTips">All * fields are required.</p>
        
            <form>
            <fieldset>
            <table width="400" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <th align="left" valign="top">CLIENT <span class="red">*</span></th>
            <td><select name="selectUser"  id="selectUser" class="text ui-widget-content ui-corner-all">
            </select></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">ACCOUNT NAME  <span class="red">*</span></th>
            <td><input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Amount <span class="red">*</span></th>
            <td><input type="text" name="amount" id="amount" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Currency <span class="red">*</span></th>
            <td><label for="select"></label>
              <select name="selectCurrency" id="selectCurrency" class="text ui-widget-content ui-corner-all">
            </select></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">CREDIT<span class="red"></span></th>
            <td><input type="text" name="credit" id="credit" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">DEBIT</th>
            <td><input type="text" name="debit" id="debit" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">Vdate 1</th>
            <td><input type="text" name="vdate1" id="vdate1" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">vdate 2</th>
            <td><input type="text" name="vdate2" id="vdate2" value="" class="text ui-widget-content ui-corner-all" />              <input id="hduserid" name="hduserid" type="hidden" value="" /></td>
          </tr>
          </table>
                
                
            </fieldset>
            </form>
        </div>
        
	</div>
     <div id="right">
           <?php require_once("../include/admin-right-menu.php"); ?>
        </div>

</body>

</html>