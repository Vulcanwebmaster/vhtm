
<!-- BEGIN: HEADER -->
			<div id="ja-headerwrap">
				<div id="ja-header" class="clearfix">
					<h1 class="logo">
						<a href="#" title=""><span>Công ty XNK Nam Đô</span></a>
					</h1>
				</div>
			</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
			<div id="ja-mainnavwrap">

			<div id="ja-mainnav">
				<ul id="ja-cssmenu" class="clearfix">
					<li class="active"><a class="menu-item0 active first-item" id="menu1" title="TRANG CHỦ" href="<?php echo base_url() ?>">
						<span class="menu-title"><?php echo $this->lang->line('menu-trangchu')?></span></a>
					</li> 
					<li><a class="menu-item1" id="menu71" href="<?php echo base_url() ?>sanpham">
						<span class="menu-title"><?php echo $this->lang->line('menu-sanpham')?></span></a>
					</li> 
					<li><a class="menu-item2" id="menu58" href="<?php echo base_url() ?>tintuc">
						<span class="menu-title"><?php echo $this->lang->line('menu-tintuc')?></span></a>
					</li> 
					<li><a class="menu-item3" id="menu53" href="<?php echo base_url() ?>gioithieu">
						<span class="menu-title"><?php echo $this->lang->line('menu-gioithieu')?></span></a>
					</li> 
					<li><a class="menu-item4" id="menu27" href="<?php echo base_url() ?>dichvu">
						<span class="menu-title"><?php echo $this->lang->line('menu-dichvu')?></span></a>
					</li> 
					<li><a class="menu-item5 last-item" id="menu49" href="<?php echo base_url() ?>lienhe">
						<span class="menu-title"><?php echo $this->lang->line('menu-lienhe')?></span></a>
					</li> 
				</ul>
			</div>				
			<div id="ja-search">
			<!--BEGIN Search Box --> 
				<form action="" method="post">

					<!--<p><label for="keyword">Tìm kiếm</label></p>-->
					<p>
						<input name="keyword" type="text" title="Tìm kiếm" class="inputbox" id="keyword">
						<!--<input class="button" type="submit" name="Search" value="Tìm kiếm" />-->
						<input class="buttonSearch" type="submit" name="Search" value="">
					</p>
				</form>
	<!-- End Search Box --> 
			</div>		
		</div>
<!-- END: MAIN NAVIGATION -->
