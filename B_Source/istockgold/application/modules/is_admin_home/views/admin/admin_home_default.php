<div id="main"><div id="page_title"><h1>Admin Home</h1></div>   
   
<div id="admin_overview">
	<div id="title">Orders management </div>
	<div id="onebox"><?php print anchor('is_exchange_orders/admin','<img src="'.base_url().'assets/images/admin/n_order.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchanges_ordes')) ?>
	<br><b>Exchange orders managment (i.e order process, complete, pending...etc)</b></div>
</div>

<div id="admin_overview">
	<div id="title">Exchange parameters</div>
	<div id="onebox"><?php print anchor('is_exchange_rates/admin','<img src="'.base_url().'assets/images/admin/n_order_fee.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchange_rates')) ?>
	<br><b>E-currencies exchange rates</b></div>
    <div id="onebox"><?php print anchor('currency/admin','<img src="'.base_url().'assets/images/admin/n_order_set.png" width="18" height="18" border="0" />'.$this->lang->line('istockgold_exchange_settings')) ?>
	<br><b>(i.e enable/disable exchange currencies, max/min exchange limits, max/min exchange fee...etc)</b></div>
	<div id="onebox"><?php print anchor('is_site_currencies/admin','<img src="'.base_url().'assets/images/admin/n_currencies.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_site_currencies')) ?>
	<br><b>Update e-currencies account, passwords and ...</b></div>
</div>

<div id="admin_overview">
	<div id="title">Content management </div>
	<div id="onebox"><?php print anchor('is_news/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_news')) ?>
	<br><b>Add/Edit site news </b></div>
    <div id="onebox"><?php print anchor('is_pages/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_pages')) ?> <br>
    <b>Add/Edit pages </b></div>
</div>
   

<div id="admin_overview">
	<div id="title">Members</div>
	<div id="onebox"><?php print anchor('is_manage_members/admin','<img src="'.base_url().'assets/images/admin/n_maccounts.gif" width="18" height="18" border="0" />'.$this->lang->line('istockgold_manage_members')) ?>
	<br><b>Manage Your User Account Here</b></div>
</div>

<div id="admin_overview">
	<div id="title">Admin Actions</div>
	<div id="onebox"><img width="18" height="18" src="<?php echo base_url();?>assets/images/admin/n_profile.gif"><a href="<?php echo base_url()?>index.php/is_update_profile/admin">Update password</a>
	<br><b>Update admin login password </b></div>
	<div id="onebox"><?php print anchor('auth/auth/logout','<img src="'.base_url().'assets/images/admin/n_logout.gif" width="18" height="17" border="0" />'.$this->lang->line('istockgold_log_out')) ?>
	<br><b>Exit admin panel </b></div>
</div></div>