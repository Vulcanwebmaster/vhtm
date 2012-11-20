<div id="header">			
			<div id="textbaner">	
				<!--<?php if ($_SESSION['lang']=="vn") 
							{?>	
					<p>Công ty cổ phần thiết bị Thái Dương</br> THAI DUONG EQUIPMENT JOINT STOCK COMPANY</p>
					<!--<?php } else{ ?>
					<p>THAI DUONG EQUIPMENT JOINT STOCK COMPANY</p>	
					<!--<?php } ?>-->
			</div>
			<div id="language">
				<a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>">
					<img src="<?php echo base_url();?>assets/5sao/images/vn.jpg"/>					
				</a>
				<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>">
					<img src="<?php echo base_url();?>assets/5sao/images/el.jpg"/>					
				</a>
			</div>
            <div id="tel">
            	<strong>
            		<?php foreach($list_hotline as $hotline){ ?>
	                        	Tel: <?php echo $hotline->sdt;?></li>  
	                        	<?php } ?>
            	
            	</strong></div>
            <ul class="top_menu">
				<li class="submenu"><a class="menu-text" style="display:block" id="menu-trangchu" href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
                	
                		<div class="bg_itemmenu" id="bg_itemmenu_1">
                			<ul style="opacity:initial !important">
                				<?php foreach($list_hotline as $hotline){ ?>
	                    		<li class="top_menu1"><a href="#">Hotline 24/24 : <?php echo $hotline->hotline;?></a></li>
	                        	<li class="top_menu1"><a href="#">Tel: <?php echo $hotline->sdt;?></a></li>  
	                        	<?php } ?>
	                        </ul>
                        </div>                    
                  
                </li>
				<li class="submenu"><a class="menu-text" style="display:block" id="menu-gioithieu" href="<?php echo base_url();?>gioi-thieu"><?php echo $this->lang->line('menu-gioithieu');?></a>
                	<div class="bg_itemmenu" id="bg_itemmenu_2">
                		<ul>
	                		<?php foreach ($list_gioithieumenu as $menu)
	                		{?>
	                			<li class="top_menu1"><a href="<?php echo base_url();?>gioithieu/detail/<?php echo $menu->id;?>"><?php if ($_SESSION['lang']=="vn") echo $menu->tieude_v; else echo $menu->tieude_e;?></a></li>
	                		<?php }?>
	                		</ul>
                		</div>
                   
                </li>
				<li  class="submenu"><a class="menu-text" style="display:block" id="menu-sanpham" href="<?php echo base_url();?>san-pham"><?php echo $this->lang->line('menu-sanpham');?></a>
					<div class="bg_itemmenu" id="bg_itemmenu_2"></div>				
                </li>
				<li class="submenu"><a class="menu-text" style="display:block" id="menu-baohanh" href="<?php echo base_url();?>bao-hanh"><?php echo $this->lang->line('menu-baohanh');?></a>
					<div class="bg_itemmenu" id="bg_itemmenu_2"></div>
				</li>
				<li class="submenu"><a href="" class="menu-text" style="display:block" id="menu-tintuc"><?php echo $this->lang->line('menu-tintuc');?></a>
                
                		<div class="bg_itemmenu" id="bg_itemmenu_3">
                			<ul>
		                    	<li class="top_menu1"><a href="<?php echo base_url();?>thu-vien-anh"><?php echo $this->lang->line('menu-hinhanh');?></a></li>
		                    	<li class="top_menu1"><a href="<?php echo base_url();?>tin-tuc"><?php echo $this->lang->line('menu-tin');?></a></li>
		                        <li class="top_menu1"><a href="<?php echo base_url();?>tuyen-dung"><?php echo $this->lang->line('menu-tuyendung');?></a></li>
	                        </ul>
                   		</div>
                 
                </li>
                <li class="submenu"><a class="menu-text" style="display:block" id="menu-lienhe" href="<?php echo base_url();?>lien-he"><?php echo $this->lang->line('menu-lienhe');?></a>
                	<div class="bg_itemmenu" id="bg_itemmenu_2"></div>
                </li>
			</ul>
			
		</div>			