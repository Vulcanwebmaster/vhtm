<!--
When creating a new menu item on the top-most level
Please ensure that you assign the LI a unique ID

Examples can be seen below for menu_bep_system
-->

		<div id="left">	<div id="navigation_menu">
	<ul>
		<li><?php print anchor('admin_home/admin','<img src=base_url()."assets/images/admin/n_status.gif" width="18" height="16" border="0" />'.$this->lang->line('istockgold_admin_home'),array('class'=>'navigation_select'))?></li>
        <div class="seperator"></div>        
        <li><?php print anchor('exchange_orders/admin','<img src="'.base_url().'assets/images/admin/n_order.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchanges_ordes')) ?></li>
		<li><?php print anchor('exchange_rates/admin','<img src="'.base_url().'assets/images/admin/n_order_fee.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_exchange_rates')) ?></li>
		<li><?php print anchor('currency/admin','<img src="'.base_url().'assets/images/admin/n_order_set.png" width="18" height="18" border="0" />'.$this->lang->line('istockgold_exchange_settings')) ?></li>			
		<div class="seperator"></div>            			                       
        <li><?php print anchor('manage_members/admin','<img src="'.base_url().'assets/images/admin/n_maccounts.gif" width="18" height="18" border="0" />'.$this->lang->line('istockgold_manage_members')) ?></li>
        <div class="seperator"></div>           
        <li><?php print anchor('site_currencies/admin','<img src="'.base_url().'assets/images/admin/n_currencies.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_site_currencies')) ?></li>
        <li><?php print anchor('site_settings/admin','<img src="'.base_url().'assets/images/admin/n_settings.gif" width="19" height="18" border="0" />'.$this->lang->line('istockgold_site_settings')) ?></li>			
		<li><?php print anchor('news/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_news')) ?></li>
        <li><?php print anchor('is_pages/admin','<img src="'.base_url().'assets/images/admin/n_ehistory.gif" width="17" height="17" border="0" />'.$this->lang->line('istockgold_pages')) ?></li>				
        <div class="seperator"></div>
		<li><?php print anchor('update_profile/admin','<img src="'.base_url().'assets/images/admin/n_profile.gif" width="18" height="17" border="0" />'.$this->lang->line('istockgold_update_profile')) ?></li>
        <li><?php print anchor('auth/auth/logout','<img src="'.base_url().'assets/images/admin/n_logout.gif" width="18" height="17" border="0" />'.$this->lang->line('istockgold_log_out')) ?></li>
	</ul>
</div>

<div class="left_box">
    <div id="page_title"><h1>Reserved Amount</h1></div>
    <div id="reserved_box">
                    <img src="<?php echo base_url();?>assets/images/admin/libertyreserve_3.gif"  title="Libertyreserve usd, Our account: U2782065" /><span class="money_1">$1,050.56</span>
                    <img src="<?php echo base_url();?>assets/images/admin/libertyreserve_3.gif"  title="Libertyreserve euro, Our account: U2782065" /><span class="money_1">&#8364;390.00</span>                    
            </div>
</div>
</div>		


