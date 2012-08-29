<?php 
	require_once('core/connect.php');
	require_once('core/CoreClass.php');
	require_once('BLL/CustodianBLL.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vurman - Spectrum Funds</title>
<link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/pagination.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.pagination.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/custodian.js"></script>

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
if(isset($_POST['Search']) && $_POST['Search']=="SEARCH"){		if(isset($_POST['search_id']) && $_POST['search_id']!=""){
		$objCustodian->id=$_POST['search_id'];
	}
	if(isset($_POST['search_cpid']) && $_POST['search_cpid']!=""){
	
		$objCustodian->cpid=$_POST['search_cpid'];
	
	}	if(isset($_POST['search_counterparty']) && $_POST['search_counterparty']!=""){
	
		$objCustodian->counterparty=$_POST['search_counterparty'];
	
	}	
	if(isset($_POST['search_biccp']) && $_POST['search_biccp']!=""){
		$objCustodian->biccp=$_POST['search_biccp'];
	}
	if(isset($_POST['search_custid']) && $_POST['search_custid']!=""){
		$objCustodian->custid=$_POST['search_custid'];
	}
	if(isset($_POST['search_custodian']) && $_POST['search_custodian']!=""){
	
		$objCustodian->custodian=$_POST['search_custodian'];
	
	}		if(isset($_POST['search_biccust']) && $_POST['search_biccust']!=""){
	
		$objCustodian->biccust=$_POST['search_biccust'];
	
	}		if(isset($_POST['search_cpacwithcust']) && $_POST['search_cpacwithcust']!=""){
	
		$objCustodian->cpacwithcust=$_POST['search_cpacwithcust'];
	
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
	var newcontent = '';	var color="#f5f5f5";
	
	// Iterate through a selection of the content and build an HTML string
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{		if(color=="#f5f5f5") 			color="#cccccc";		else if(color=="#cccccc")				color="#f5f5f5";
		//alert(i);
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
		newcontent += '<td style="text-align:center;">  <a style=\'text-decoration:underline; cursor:pointer;\' onclick=ViewCustodian(' + JSONCustodian[i].id+')>'+JSONCustodian[i].id + '</a></td>';
		newcontent += '<td style="text-align:center;">' + JSONCustodian[i].cpid + '</td>';
		newcontent += '<td style="text-align:center;">' + JSONCustodian[i].counterparty + '</td>';
		newcontent += '<td style="text-align:center;">' + JSONCustodian[i].biccp + '</td>';
		newcontent+="</tr>";
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
		newcontent += '<td style="text-align:center;">' + JSONCustodian[i].custid + '</td>';
		newcontent += '<td style="text-align:center;">' + JSONCustodian[i].custodian + '</td>';		newcontent += '<td colspan="2" style="text-align:center;">' + JSONCustodian[i].biccust + '</td>';		
		newcontent+="</tr>";				newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";				newcontent += '<td colspan="4" style="text-align:center;">' + JSONCustodian[i].cpacwithcust + '</td>';							newcontent+="</tr>";
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
            <img src="ZEIT8.jpg" alt="" /></div>
        <div id="left">

             <?php require_once('include/menu-left-client.php'); ?>

        </div>
    <div id="content">
        
      <fieldset style="border:1px solid #CCC; width:610px; margin:0px; padding:0px;">
   	    <legend>COUNTERPARTY MANAGEMENT</legend>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
          <table id="searchtable" width="600" border="0" cellspacing="1" cellpadding="2">
            <tr>
              <th align="right">ID</th>
              <td align="left">
              <input name="search_id" type="text" id="search_id" size="20" /></td>                            <th align="right">CP-ID</th>              <td align="left">              <input name="search_cpid" type="text" id="search_cpid" size="20" /></td>
              <!--<th align="right">COUNTERPARTY</th>-->              <th align="right">NAME CP</th>
              <td align="left"><input name="search_counterparty" type="text" id="search_counterparty" size="20" /></td>              <th align="right">BIC (CP)</th>              <td align="left"><input name="search_biccp" type="text" id="search_biccp" size="20" /></td>              
            </tr>
            <tr>
              <th align="right">CUST-ID</th>              <td align="left">              <input name="search_custid" type="text" id="search_custid" size="20" /></td>              			  <!--<th align="right">CUSTODIAN</th>-->			  <th align="right">NAME CUST</th>              <td align="left"><input name="search_custodian" type="text" id="search_custodian" size="20" /></td>			  			  <th align="right">BIC (CUST.)</th>              <td align="left"><input name="search_biccust" type="text" id="search_biccust" size="20" /></td>              <tr/>              <tr>			  			  <th align="right">CP-A/C-WITH-CUST</th>              <td align="left"><input name="search_cpacwithcust" type="text" id="search_cpacwithcust" size="20" /></td>              </tr>              <tr>
              <td colspan="8" align="right">
                <input type="submit" name="Search" id="Search" value="SEARCH" />
                <input type="button" id="create-custodian" value="ADD CUSTODIAN" />              </td>
            </tr>
          </table>
		</form>
      </fieldset>
    	<div id="users-contain" class="ui-widget"  style="clear:both; float:left; margin:0px; padding:0px; padding-top:5px;">
            <div id="Searchuser">This content will be replaced when pagination inits.</div>
            <table id="users" class="ui-widget ui-widget-content">
                <thead>
                    <tr class="ui-widget-header ">
                    	<th>ID</th>
                        <th>COUNTERPARTY - ID</th>
                        <!--<th>COUNTERPARTY</th>-->                        <th>NAME COUNTERPARTY</th>                        
                        <th >BIC (COUNTERPARTY)</th>
                    </tr>
                    <tr class="ui-widget-header ">                    	<th>CUSTODIAN-ID</th>                        <!--<th>CUSTODIAN</th>-->                        <th>NAME CUSTODIAN</th>
                    	<th colspan="3">BIC (CUSTODIAN)</th>                    </tr>                    <tr class="ui-widget-header " >
                        <th colspan="4">COUNTERPARTY A/C WITH CUSTODIAN</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
        
    	<div id="dialog" title="Create / Edit Custodian">
            <p id="validateTips">&nbsp;</p>
            <form>
            <table width="400" border="0" cellspacing="0" cellpadding="0">
             <tr>
            <th align="left" valign="top">ID <span class="red">*</span></th>
            <td><input type="text" readonly="readonly" name="id" id="id" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">CP-ID<span class="red">*</span></th>
            <td><input type="text" name="cpid" id="cpid" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">COUNTERPARTY<span class="red">*</span></th>
            <td><input type="text" name="counterparty" id="counterparty" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">BIC (CP)<span class="red"></span></th>
            <td><input type="text" name="biccp" id="biccp" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th width="150" align="left" valign="top">CUST-ID<span class="red">*</span></th>
            <td><input type="text" name="custid" id="custid" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          
           <tr>
            <th width="150" align="left" valign="top">CUSTODIAN<span class="red">*</span></th>
            <td><input type="text" name="custodian" id="custodian" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="150" align="left" valign="top">BIC (CUST.)<span class="red"></span></th>
            <td><input type="text" name="biccust" id="biccust" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
           <tr>
            <th width="150" align="left" valign="top">CP A/C WITH CUST.<span class="red"></span></th>
            <td><input type="text" name="cpacwithcust" id="cpacwithcust" value="" class="text ui-widget-content ui-corner-all" /></td>
          </tr>
          <tr>
            <th align="left" valign="top">&nbsp;</th>
            <td><input id="hdid" name="hdid" type="hidden" value="" /></td>
          </tr>
            </table>
            </form>
        </div>
        
	</div>
     <div id="right">

            <?php require_once('include/menu-right-client.php'); ?>

          </div>
</div>
</body>

</html>