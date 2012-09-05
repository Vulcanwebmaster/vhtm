<?php
require_once('core/connect.php');

require_once('core/CoreClass.php');

require_once('BLL/UserBLL.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">

<head>

    <title>Vurman - Spectrum Funds</title>

    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">

    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

   <link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/pagination.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.pagination.js"></script>
<script type="text/javascript" src="js/user.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/user.js"></script>

     <style type="text/css">

	fieldset

	{

		margin-top:10px;

		margin-bottom:10px;

	}

	</style>

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

if(isset($_POST['Search']) && $_POST['Search']=="SEARCH"){	if(isset($_POST['search_id']) && $_POST['search_id']!=""){

	$objUser->id=$_POST['search_id'];

	}	if(isset($_POST['search_firstname']) && $_POST['search_firstname']!=""){
	
		$objUser->firstname=$_POST['search_firstname'];
		
	}	
	if(isset($_POST['search_lastname']) && $_POST['search_lastname']!=""){
		$objUser->lastname=$_POST['search_lastname'];
	}
	if(isset($_POST['search_department']) && $_POST['search_department']!=""){
	
		$objUser->department=$_POST['search_department'];
		
	}	if(isset($_POST['search_clientid']) && $_POST['search_clientid']!=""){
	
		$objUser->clientid=$_POST['search_clientid'];
	
	}		if(isset($_POST['search_officephone']) && $_POST['search_officephone']!=""){
	
		$objUser->officephone=$_POST['search_officephone'];
	
	}		if(isset($_POST['search_cellphone']) && $_POST['search_cellphone']!=""){
	
		$objUser->cellphone=$_POST['search_cellphone'];
	
	}		if(isset($_POST['search_phone']) && $_POST['search_phone']!=""){
	
		$objUser->phone=$_POST['search_phone'];
	
	}
	if(isset($_POST['search_loginid']) && $_POST['search_loginid']!=""){
		$objUser->loginid=$_POST['search_loginid'];
	}
	if(isset($_POST['search_password']) && $_POST['search_password']!=""){
		$objUser->password=$_POST['search_password'];
	}
	
	if(isset($_POST['search_email']) && $_POST['search_email']!=""){
		$objUser->email=$_POST['search_email'];
	}
	
	if(isset($_POST['search_active']) && $_POST['search_active']>=0){
		$objUser->active=$_POST['search_active'];
	}
	
	if(isset($_POST['search_role']) && $_POST['search_role']!="select"){
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
	var color="#f5f5f5";
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{
		if(color=="#f5f5f5") color="#cccccc";
		else if(color=="#cccccc")	color="#f5f5f5";
		//alert(i);
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
		newcontent += '<td style="text-align:center;">  <a style=\'text-decoration:underline;  cursor:pointer;\' onclick=ViewUser(' + JSONUser[i].id+')>'+JSONUser[i].id + '</a></td>';
		newcontent += '<td style="text-align:center;">' + JSONUser[i].clientid + '</td>';				newcontent += '<td style="text-align:center;">' + JSONUser[i].loginid + '</td>';				newcontent += '<td style="text-align:center;">' + JSONUser[i].password + '</td>';				newcontent+="</tr>";		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";		
		newcontent += '<td style="text-align:center;">' + JSONUser[i].firstname + '</td>';
		newcontent += '<td style="text-align:center;">' + JSONUser[i].lastname + '</td>';		newcontent += '<td style="text-align:center;" colspan="2">' + JSONUser[i].department + '</td>';				newcontent+="</tr>";
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";		
		newcontent += '<td style="text-align:center;">' + JSONUser[i].officephone + '</td>';		newcontent += '<td style="text-align:center;">' + JSONUser[i].cellphone + '</td>';				newcontent += '<td style="text-align:center;" colspan="2">' + JSONUser[i].email + '</td>';		//newcontent += '<td>' + JSONUser[i].phone + '</td>';				newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
				newcontent +='<td style="text-align:center;" >' + getActive(JSONUser[i].active) + '</td>';		
		newcontent += '<td style="text-align:center;" colspan="3">' + JSONUser[i].role + '</td>';
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

        <div id="title"><img src="ZEIT8.jpg" alt="" /></div>

         <div id="left">

             <?php require_once('include/menu-left-client.php'); ?>

        </div>


        <div id="content" style="margin-left: 47px;">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
         <fieldset style="border:1px solid #CCC; width:710px; margin:0px; padding:0px;" >
   	    <legend>USER MANAGEMENT</legend>
        <!-- Sắp xếp thứ tự trình bày các thuộc tính USER MÂNGEMENT và bỏ PHONE NO-->
          <table id="searchtable" width="700" border="0" cellspacing="1" cellpadding="2">			<tr>				<th align="right" width="5%">ID</th>				<td align="left" width="5%">					<input name="search_id" type="text" id="search_id" size="18" />				</td>				<th align="right">CLIENT-ID</th>				<td align="left">					<input name="search_clientid" type="text" id="search_clientid" size="18" />				</td>				<th align="right">LOGIN-ID</th>				<td align="left">					<input name="search_loginid" type="text" id="search_loginid" size="18" />				</td>				<th align="right">PASSWORD</th>				<td align="left">					<input name="search_password" type="text" id="search_password" size="18" />				</td>				</tr>			<tr>				<th align="right" width="15%">FIRST NAME</th>				<td align="left" width="15%">					<input name="search_firstname" type="text" id="search_firstname" size="18" />				</td>				<th align="right" width="15%">LAST NAME</th>				<td align="left" width="15%">					<input name="search_lastname" type="text" id="search_lastname" size="18" />				</td>				<th align="right" width="15%">DEPARTMENT</th>				<td align="left" width="15%">					<input name="search_department" type="text" id="search_department" size="18" />				</td>			</tr>			<tr>				<th align="right" width="">OFFICE PHONE NO.</th>				<td align="left">					<input name="search_officephone" type="text" id="search_officephone" size="18" />				</td>				<th align="right">CELL PHONE NO.</th>				<td align="left">					<input name="search_cellphone" type="text" id="search_cellphone" size="18" />				</td>				<th align="right">E-MAIL</th>				<td align="left">					<input name="search_email" type="text" id="search_email" size="18" />				</td>			</tr>											<!--<th align="right">PHONE NO.</th>				<td align="left">					<input name="search_phone" type="text" id="search_phone" size="20" />				</td>-->			<tr >				<th>&nbsp;</th>				<th>ACTIVE					<select name="search_active" id="search_active" style="padding-left: 13px;">                <option value="-1" selected="selected">select</option>                <option value="1">YES</option>                <option value="0">NO</option>              </select>				</th>				   <th>&nbsp;</th>				<th align="right">ROLE					<select name="search_role" id="search_role">                <option value="select">select</option>                <option value="user">USER</option>                <option value="admin">ADMIN</option>              </select>             </th>                       </tr>					<!--Kết thúc sửa-->
            <tr>
              <th  align="right">&nbsp;</th>
              <td>&nbsp;</td>
              <th  align="right">&nbsp;</th>              <th  align="right">&nbsp;</th>              <td>&nbsp;</td>              <th width="80" align="right">&nbsp;</th>              

                <td colspan="2" align="right">
                <input type="submit" name="Search" id="Search" value="SEARCH" />
                <input type="button" id="create-user" value="NEW USER" />
                </td>
            </tr>
          </table>
		
      </fieldset>
      </form><!--Hoang- Customize table--like remaning work vurman.com-->
    	<div id="users-contain" class="ui-widget" style=" width: 710px; clear:both; float:left; margin:0px; padding:0px; padding-top:5px;">
            <div id="Searchuser">This content will be replaced when pagination inits.</div>
            <table id="users" class="ui-widget ui-widget-content" style="width: 710px;">
                <thead>
                    <tr class="ui-widget-header ">
                    	<th style="text-align: center;">ID</th>
                        <th style="text-align: center;">CLIENT-ID</th>                        						<th style="text-align: center;">LOGIN ID</th>												 <th style="text-align: center;">PASSWORD</th>                      
                       
                    </tr>
                    <tr class="ui-widget-header " style=" width: :710px;" >
                       <th style="width: 238px; text-align: center;">FIRST NAME</th>                                                <th style="width: 238px; text-align: center;" >LAST NAME</th>                                                <th style="width: 238px; text-align: center;" colspan="2">DEPARTMENT</th>                                           <!-- <th>PHONE</th>-->					</tr>					<tr class="ui-widget-header ">						<th style="text-align: center;">OFFICE PHONE</th>                                            	<th style="text-align: center;">CELL PHONE</th>                      	                      	<th style="text-align: center;" colspan="2">E-MAIL</th>						</tr>	
                     					<tr class="ui-widget-header ">
                      <th style="text-align: center;">ACTIVE</th>                                            <th style="text-align: center;" colspan="3">ROLE</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
        
    	<div id="dialog" title="Create new user">
            <p id="validateTips">All * fields are required.</p>
            <fieldset>
            <table width="400" border="0" cellspacing="0" cellpadding="0">             <tr>            <th align="left" valign="top">Id <span class="red"></span></th>            <td><input type="text" readonly="readonly" name="id" id="id" class="text ui-widget-content ui-corner-all" /></td>          </tr>
             <tr>
            <th align="left" valign="top">Client Id <span class="red">*</span></th>
            <td><input type="text" name="clientid" id="clientid" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">First Name <span class="red">*</span></th>
            <td><input type="text" name="firstname" id="firstname" class="text ui-widget-content ui-corner-all" /></td>
          </tr>          <tr>            <th align="left" valign="top">Last Name <span class="red">*</span></th>            <td><input type="text" name="lastname" id="lastname" class="text ui-widget-content ui-corner-all" /></td>          </tr>                    <tr>            <th width="120" align="left" valign="top">Department <span class="red"></span></th>            <td><input type="text" name="department" id="department" value="" class="text ui-widget-content ui-corner-all" /></td>          </tr>                     <tr>            <th width="120" align="left" valign="top">Office phone no. <span class="red"></span></th>            <td><input type="text" name="officephone" id="officephone" value="" class="text ui-widget-content ui-corner-all" /></td>          </tr>           <tr>            <th width="120" align="left" valign="top">Cell phone no. <span class="red"></span></th>            <td><input type="text" name="cellphone" id="cellphone" value="" class="text ui-widget-content ui-corner-all" /></td>          </tr>          
          <tr>
            <th width="120" align="left" valign="top">Email</th>
            <td><input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>                     <tr>            <th width="120" align="left" valign="top">Phone no. <span class="red"></span></th>            <td><input type="text" name="phone" id="phone" value="" class="text ui-widget-content ui-corner-all" /></td>          </tr>          
          <tr>
            <th width="120" align="left" valign="top">Login Id <span class="red">*</span></th>
            <td><input type="text" name="loginid" id="loginid" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Password <span class="red">*</span></th>
            <td><input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Role <span class="red">*</span></th>
            <td align="left"><select name="selectRole" id="selectRole" class="text ui-widget-content ui-corner-all">
            	<option value="select">select</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select></td>
          </tr>
          <tr>
            <th width="120" align="left" valign="top">Active <span class="red">*</span></th>
            <td align="left">             <input name="rduseractive" type="radio" id="rduseractive_0" checked="checked" value="1"  style="float:left;" />Yes
              <input type="radio" name="rduseractive" value="0" id="rduseractive_1" />No
              <input id="id" name="id" type="hidden" value="" />
            </td>
          </tr>
          </table>
                
                
            </fieldset>
        
		</div>

    </div>

<div id="right">

            <?php require_once('include/menu-right-client.php'); ?>

          </div>     



</body>

</html>