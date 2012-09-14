<div id="header">
		<a href="index.html" class="float"><img src="<?php echo base_url()?>assets/minhchau2/images/logo.jpg" alt="" width="171" height="73" /></a>																																																		
	  <div class="topblock1">
			<?php echo $this->lang->line('header-hientai'); ?>:<br /><select><option>US Dollar</option></select>
		</div>
	    <div class="topblock2">
			<?php echo $this->lang->line('header-ngonngu'); ?>:<br />
		    <!--<a href="#"><img src="<?php echo base_url()?>assets/minhchau2/images/flag1.gif" alt="" width="19" height="11" /></a>																																		
		    <a href="#"><img src="<?php echo base_url()?>assets/minhchau2/images/flag2.gif" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="<?php echo base_url()?>assets/minhchau2/images/flag3.gif" alt="" width="19" height="11" /></a>
		    <a href="#"><img src="<?php echo base_url()?>assets/minhchau2/images/flag6.gif" alt="" width="19" height="11" /></a>-->
		    
		    <a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url()?>assets/minhchau2/images/vn.jpg" alt="" width="19" height="11" /></a>
		    <a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url()?>assets/minhchau2/images/el.jpg" alt="" width="19" height="11" /></a>
		    
		</div>
		<!--<div class="topblock2">
			<img src="<?php echo base_url()?>assets/minhchau2/images/shopping.gif" alt="" width="24" height="24" class="shopping" />																																																																									
		 	<p>Shopping cart</p> <p><strong>0</strong> <span>items</span></p>
		</div>
        <!---------------begin menu----------------------->
		<ul id="menu">
			<li id="m-trangchu"><a id="menu-trangchu" href="<?php echo base_url() ?>"><?php echo $this->lang->line('menu-trangchu')?></a></li>
			<li id="m-sanpham"><a id="menu-sanpham" href="<?php echo base_url() ?>sanpham"><?php echo $this->lang->line('menu-sanpham')?></a></li>
            <li id="m-gioithieu"><a id="menu-gioithieu" href="<?php echo base_url() ?>gioithieu"><?php echo $this->lang->line('menu-gioithieu')?></a></li>
            <li id="m-dichvu"><a id="menu-dichvu" href="<?php echo base_url() ?>dichvu"><?php echo $this->lang->line('menu-dichvu')?></a></li>
            <li id="m-lienhe"><a id="menu-lienhe" href="<?php echo base_url() ?>lienhe"><?php echo $this->lang->line('menu-lienhe')?></a></li>
		</ul>
        <!---------------end menu----------------------->
	</div>