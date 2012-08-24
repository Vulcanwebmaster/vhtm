<header>
        <h1><a href="index.html"><img src="<?php echo base_url();?>assets/tuongnhat/images/logo.png" alt=""></a></h1>
        <?php if ($this->session->userdata('lang')=='vn')
        {?>
        	<a class="button-2" href="<?php echo base_url();?>changelang/change/en/<?php echo uri_string();?>">English</a>
        <?php }
        else {?>
        	<a class="button-2" href="<?php echo base_url();?>changelang/change/vn/<?php echo uri_string();?>">Tiếng Việt</a>
        <?php }?>
        <nav>  
            <ul class="menu">
                <li class="current"><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a></li>
                <li><a href="<?php echo base_url();?>gioithieu"><?php echo $this->lang->line('menu-gioithieu');?></a></li>
                <li><a href="#"><?php echo $this->lang->line('menu-duhoc');?></a></li>
                <li class="menuitem"><a href="#" id="thuongmai-menu"><?php echo $this->lang->line('menu-thuongmai');?></a>
                	<fieldset class="level2">
                		<ul>
                			<li><a href="#"><?php echo $this->lang->line('menu-bakery');?></a></li>
                		</ul>
                		<ul>
                			<li><a href="#"><?php echo $this->lang->line('menu-thoitrang');?></a></li>
                		</ul>
                	</fieldset>
                </li>
				<li><a href="#"><?php echo $this->lang->line('menu-dichvu');?></a></li>
				<li><a href="<?php echo base_url();?>lienhe"><?php echo $this->lang->line('menu-lienhe');?></a></li>
				<li><a href="#"><?php echo $this->lang->line('menu-doitac');?></a></li>
            </ul>
         </nav>
    