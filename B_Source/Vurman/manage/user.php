<?php 
require_once('../core/connect.php');
require_once('../core/CoreClass.php');
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
<script type="text/javascript" src="../js/user.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/user.js"></script>

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

$objUser=new UserClass($db);

if(isset($_POST['Search']) && $_POST['Search']=="Search"){
	if(isset($_POST['search_name']) && $_POST['search_name']!=""){
		$objUser->name=$_POST['search_name'];
		echo $objUser->name;
	}
	
	if(isset($_POST['search_login']) && $_POST['search_login']!=""){
		$objUser->login=$_POST['search_login'];
	}
	
	if(isset($_POST['search_email']) && $_POST['search_email']!=""){
		$objUser->email=$_POST['search_email'];
	}
	
	if(isset($_POST['search_active']) && $_POST['search_active']>=0){
		$objUser->active=$_POST['search_active'];
	}
	
	if(isset($_POST['search_role']) && $_POST['search_role']>0){
		$objUser->role=$_POST['search_role'];
	}
	
}

echo $objUser->GetUserUsingJSON();

?>
<script type="text/javascript">
function initPagination() {
	// count entries inside the hidden content
	var num_entries = JSONUser.length;
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
	var max_elem = Math.min((page_index+1) * items_per_page, JSONUser.length);
	var newcontent = '';
	
	// Iterate through a selection of the content and build an HTML string
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{
		//alert(i);
		newcontent+="<tr class='result'>";
		newcontent += '<td>  <a style=\'text-decoration:underline; cursor:pointer;\' onclick=ViewUser(' + JSONUser[i].id+')>'+JSONUser[i].id + '</a></td>';
		newcontent += '<td>' + JSONUser[i].clientid + '</td>';
		newcontent += '<td>' + JSONUser[i].name + '</td>';
		newcontent += '<td>' + JSONUser[i].email + '</td>';
		newcontent += '<td>' + JSONUser[i].login + '</td>';
		newcontent += '<td>' + JSONUser[i].role + '</td>';
		newcontent += '<td>' + JSONUser[i].buyer + '</td>';
		newcontent += '<td>' + JSONUser[i].seller + '</td>';
		newcontent += '<td>' + getActive(JSONUser[i].active) + '</td>';
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
              <th width="60" align="right">NAME</th>
              <td><label for="search_name"></label>
              <input name="search_name" type="text" id="search_name" size="15" /></td>
              <th width="80" align="right">LOGIN ID</th>
              <td><input name="search_login" type="text" id="search_login" size="15" /></td>
              <th width="60" align="right">EMAIL</th>
                <td><input name="search_email" type="text" id="search_email" size="20" /></td>
                <th width="60" align="right">ACTIVE</th>
              <td><select name="search_active" id="search_active">
                <option value="-1" selected="selected">Select</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select></td>
            </tr>
            <tr>
              <th width="60" align="right">ROLE</th>
              <td><select name="search_role" id="search_role">
              <option value="select">Select</option>
              <option value="user">user</option>
              <option value="admin">admin</option>
              </select></td>
              <th width="80" align="right">&nbsp;</th>
              <td>&nbsp;</td>
              <th width="60" align="right">&nbsp;</th>
                <td>&nbsp;</td>
                <td colspan="2" align="right">
                <input type="submit" class="ui-button ui-state-default ui-corner-all" name="Search" id="Search" value="Search" />
                <input type="button" id="create-user" class="ui-button ui-state-default ui-corner-all" value="New User" />
                </td>
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
                        <th>CLIENT-ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>LOGIN ID</th>
                        <th>ROLE</th>
                        <th>BUYER</th>
                        <th>SELLER</th>
                        <th>ACTIVE</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
        
    	<div id="dialog" title="Create new user">
            <p id="validateTips">All * fields are required.</p>
        
            <form>
            <fieldset>
            <table width="400" border="0" cellspacing="0" cellpadding="0">
             <tr>
            <th align="left" valign="top">Client Id <span class="red">*</span></th>
            <td><input type="text" name="clientid" id="clientid" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">Name <span class="red">*</span></th>
            <td><input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Email</th>
            <td><input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Login Id <span class="red">*</span></th>
            <td><input type="text" name="login" id="login" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Password <span class="red">*</span></th>
            <td><input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          
           <tr>
            <th width="120" align="left" valign="top">Buyer <span class="red"></span></th>
            <td><input type="text" name="buyer" id="buyer" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="120" align="left" valign="top">Seller <span class="red"></span></th>
            <td><input type="text" name="seller" id="seller" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="120" align="left" valign="top">Custodian <span class="red"></span></th>
            <td><input type="text" name="custodian" id="custodian" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="120" align="left" valign="top">BIC <span class="red"></span></th>
            <td><input type="text" name="bic" id="bic" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          
          <tr>
            <th width="120" align="left" valign="top">Role <span class="red">*</span></th>
            <td><select name="selectRole" id="selectRole" class="text ui-widget-content ui-corner-all">
            	<option value="select">select</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Active <span class="red">*</span></th>
            <td> <input name="rduseractive" type="radio" id="rduseractive_0" value="1" checked="checked" />Yes
              <input type="radio" name="rduseractive" value="0" id="rduseractive_1" />No
              <input id="hduserid" name="hduserid" type="hidden" value="" />
            </td>
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