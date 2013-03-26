<div id="header">																																																																								
	<div id="header_inside">
		<img src="<?php echo base_url();?>assets/minhchau/images/header.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
		<ul id="menu">
			<?php if ($_SESSION['lang']=="vn") 
			{?>		
				<li><a id="menu-trangchu" href="<?php echo base_url();?>" class="but1">TRANG CHỦ</a></li>
				<li><a id="menu-gioithieu" href="<?php echo base_url();?>gioithieu" class="but1">GIỚI THIỆU</a></li>
				<li><a id="menu-sanpham" href="<?php echo base_url();?>sanpham" class="but1">SẢN PHẨM</a></li>
				<li><a id="menu-dichvu" href="<?php echo base_url(); ?>dichvu" class="but1">DỊCH VỤ</a></li>
				<li><a id="menu-lienhe" href="<?php echo base_url(); ?>lienhe" class="but1">LIÊN HỆ</a></li>
			<?php } else{ ?>
				<li><a id="menu-trangchu" href="<?php echo base_url();?>" class="but1">HOME</a></li>
				<li><a id="menu-gioithieu" href="<?php echo base_url();?>gioithieu" class="but1">ABOUT US</a></li>
				<li><a id="menu-sanpham" href="<?php echo base_url();?>sanpham" class="but1">PRODUCTS</a></li>
				<li><a id="menu-dichvu" href="<?php echo base_url(); ?>dichvu" class="but1">SERVICES</a></li>
				<li><a id="menu-lienhe" href="<?php echo base_url(); ?>lienhe" class="but1">CONTACT US</a></li>
			<?php } ?>
		</ul>
		<div id="img-language">
			<a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url();?>assets/minhchau/images/vn19.jpg"/></a>
			<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><img src="<?php echo base_url();?>assets/minhchau/images/el.jpg"/></a>
		</div>
	</div>
	<div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <p><img src="<?php echo base_url();?>assets/minhchau/images/slide1.jpg"  alt="" /></p>
           <p><img src="<?php echo base_url();?>assets/minhchau/images/slide2.jpg"  alt="" /></p>
            <p><img src="<?php echo base_url();?>assets/minhchau/images/slide3.jpg"  alt="" data-transition="slideInLeft" /></p>
        </div>           
    </div>
	
</div>