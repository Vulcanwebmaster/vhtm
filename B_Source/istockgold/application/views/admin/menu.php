<!--
When creating a new menu item on the top-most level
Please ensure that you assign the LI a unique ID

Examples can be seen below for menu_bep_system
-->

<script type="text/javascript">
self.setInterval("time()",1000);
function time()
{
	var xmlHttp;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();	  
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
	    {
	    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	    }
	  catch (e)
	    {
	    try
	      {
	      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	      }
	    catch (e)
	      {
	      alert("Your browser does not support AJAX!");
	      return false;
	      }
	    }
	  }//kiem tra brower
  
	xmlHttp.onreadystatechange=function()
    {
    	if(xmlHttp.readyState==4)
      	{
    		success(xmlHttp.responseText);
      	}
    }	
	xmlHttp.open("POST","<?php echo base_url()?>application/views/admin/ajax.php",true);
	xmlHttp.send();
}

function success(response)
{
	var result=response;
	var mang=result.split("&");
	document.getElementById("a").innerHTML = "  $"+mang[1];
	document.getElementById("b").innerHTML = "  $"+mang[2];
	return true;
}
self.setInterval("time()",3000);
</script>
		<div id="left">	<div id="navigation_menu">
	<ul>
		<li><?php print anchor('is_admin_home/admin','<img src="'.base_url().'assets/images/admin/n_status.gif" width="18" height="16" border="0" />'.$this->lang->line('istockgold_admin_home'),array('class'=>'navigation_select'))?></li>
        <div class="seperator"></div>        
        <li><?php print anchor('is_exchange_orders/admin','<img src="'.base_url().'assets/images/admin/n_order.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchanges_ordes')) ?></li>
		<li><?php print anchor('is_exchange_rates/admin','<img src="'.base_url().'assets/images/admin/n_order_fee.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchange_rates')) ?></li>
		<li><?php print anchor('currency/admin','<img src="'.base_url().'assets/images/admin/n_order_set.png" width="18" height="18" border="0" />'.$this->lang->line('istockgold_exchange_settings')) ?></li>			
		<div class="seperator"></div>            			                       
        <li><?php print anchor('is_manage_members/admin','<img src="'.base_url().'assets/images/admin/n_maccounts.gif" width="18" height="18" border="0" />'.$this->lang->line('istockgold_manage_members')) ?></li>
        <div class="seperator"></div>           
        <li><?php print anchor('is_site_currencies/admin','<img src="'.base_url().'assets/images/admin/n_currencies.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_site_currencies')) ?></li>
        <li><?php print anchor('is_site_settings/admin','<img src="'.base_url().'assets/images/admin/n_settings.gif" width="19" height="18" border="0" />'.$this->lang->line('istockgold_site_settings')) ?></li>			
		<li><?php print anchor('is_news/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_news')) ?></li>
        <li><?php print anchor('is_pages/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_pages')) ?></li>				
        <li><?php print anchor('is_mail/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_mail')) ?></li>				
        <li><?php print anchor('is_contact_message/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_contact_us')) ?></li>				
         
        <div class="seperator"></div>
             <li><?php print anchor('is_online_support/admin','<img src="'.base_url().'assets/images/admin/n_profile.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_online_support')) ?></li> 
		<li><?php print anchor('is_update_profile/admin','<img src="'.base_url().'assets/images/admin/n_profile.gif" width="18" height="17" border="0" />'.$this->lang->line('istockgold_update_profile')) ?></li>
        <li><?php print anchor('auth/auth/logout','<img src="'.base_url().'assets/images/admin/n_logout.gif" width="18" height="17" border="0" />'.$this->lang->line('istockgold_log_out')) ?></li>
	</ul>
</div>


	<div class="left_box">
    <div id="page_title"><h1>Reserved Amount</h1></div>
    <div id="reserved_box">
      <img src="<?php echo base_url();?>assets/images/admin/libertyreserve_3.gif"/>
      <span id ="a"></span>
      <img src="<?php echo base_url();?>assets/images/wu.jpg"/>
      <span id ="b"></span>
     </div>
</div>
</div>		


