<div id="header">
			<div id="search">
				<?php echo $this->lang->line('menu-timkiem');?><br />																																																							
				<form action="#">
					<select>
						<option>Category</option>
						<option>Accessories</option>
						<option>Bottoms</option>
						<option>Denim</option>
					</select>
					<select>
					<option>Boutique</option>
						<option>Aeffe S.P.A</option>
						<option>Agatha</option>
						<option>Anna Sui</option>
					</select>
					<a href="#"><img src="<?php echo base_url();?>assets/5sao/images/ok.png" alt="setalpm" width="50" height="23" />
                    </a>																																																																																								
				</form>
			</div>
			<div id="language">
				<a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url();?>assets/5sao/images/vn.jpg"/></a>
				<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url();?>assets/5sao/images/el.jpg"/></a>
			</div>
            <div id="tel"><?php echo $this->lang->line('menu-dienthoai');?>:0123456789</div>
            <ul class="top_menu">
				<li class="submenu"><a href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
                	<div class="itemmenu">
                    	<a href="#">Hotlline 24/24 : 0988.999.687</a><hr/>
                        <a href="#">Tel: 04.37 633 594</a><hr/>                       
                    </div>
                </li>
				<li class="submenu"><a href="<?php echo base_url();?>gioithieu"><?php echo $this->lang->line('menu-gioithieu');?></a>
                	<div class="itemmenu">
                		<?php foreach ($list_gioithieumenu as $menu)
                		{?>
                			<a href="<?php echo base_url();?>gioithieu/detail/<?php echo $menu->id;?>"><?php if ($lang=="vn") echo $menu->tieude_v; else echo $menu->tieude_e;?></a><hr/>
                		<?php }?>
                    </div>
                </li>
				<li  class="submenu"><a href="<?php echo base_url();?>sanpham"><?php echo $this->lang->line('menu-sanpham');?></a>
                </li>
				<li><a href="<?php echo base_url();?>baohanh"><?php echo $this->lang->line('menu-baohanh');?></a></li>
				<li class="submenu"><a href="<?php echo base_url();?>tintuc"><?php echo $this->lang->line('menu-tintuc');?></a>
                	<div class="itemmenu">
                    	 <a href="#">Hình ảnh</a><hr/>
                    	<a href="#">Tin tức - Sự kiện</a><hr/>
                        <a href="#">Tuyển dụng</a><hr/>
                       
                    </div>
                </li>
			</ul>
		</div>