<div id="header">			
			<div id="search">
				<?php echo $this->lang->line('menu-timkiem');?><br />				
					<form class="searchform" action="<?php echo base_url();?>timkiem/doSearch" method="post">
						<input class="t" onfocus="if (this.value == 'Tìm kiếm sản phẩm …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm …';}" type="text" name="s" value="Tìm kiếm sản phẩm …" />
						<input class="searchsubmit" type="submit" value="" />
					</form>																																																			
			</div>
			<div id="language">
				<a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>">
					<img src="<?php echo base_url();?>assets/5sao/images/vn.jpg"/>					
				</a>
				<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>">
					<img src="<?php echo base_url();?>assets/5sao/images/el.jpg"/>					
				</a>
			</div>
            <div id="tel"><?php echo $this->lang->line('menu-dienthoai');?>: <strong>0123456789</strong></div>
            <ul class="top_menu">
				<li class="submenu"><a id="menu-trangchu" href="<?php echo base_url();?>"><?php echo $this->lang->line('menu-trangchu');?></a>
                	<div class="itemmenu">
                    	<a href="#">Hotline 24/24 : 0988.999.687</a><hr/>
                        <a href="#">Tel: 04.37 633 594</a><hr/>                       
                    </div>
                </li>
				<li class="submenu"><a id="menu-gioithieu" href="<?php echo base_url();?>gioithieu"><?php echo $this->lang->line('menu-gioithieu');?></a>
                	<div class="itemmenu">
                		<?php foreach ($list_gioithieumenu as $menu)
                		{?>
                			<a href="<?php echo base_url();?>gioithieu/detail/<?php echo $menu->id;?>"><?php if ($lang=="vn") echo $menu->tieude_v; else echo $menu->tieude_e;?></a><hr/>
                		<?php }?>
                    </div>
                </li>
				<li  class="submenu"><a id="menu-sanpham" href="<?php echo base_url();?>sanpham"><?php echo $this->lang->line('menu-sanpham');?></a>
                </li>
				<li><a id="menu-baohanh" href="<?php echo base_url();?>baohanh"><?php echo $this->lang->line('menu-baohanh');?></a></li>
				<li class="submenu"><a id="menu-tintuc"><?php echo $this->lang->line('menu-tintuc');?></a>
                	<div class="itemmenu">
                    	 <a href="<?php echo base_url();?>thuvienanh"><?php echo $this->lang->line('menu-hinhanh');?></a><hr/>
                    	<a href="<?php echo base_url();?>tintuc"><?php echo $this->lang->line('menu-tin');?></a><hr/>
                        <a href="<?php echo base_url();?>tuyendung"><?php echo $this->lang->line('menu-tuyendung');?></a><hr/>
                       
                    </div>
                </li>
                <li><a id="menu-lienhe" href="<?php echo base_url();?>lienhe"><?php echo $this->lang->line('menu-lienhe');?></a></li>
			</ul>
		</div>