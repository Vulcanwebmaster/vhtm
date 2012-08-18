<div id="header">
            <div id="slideshow-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo base_url();?>assets/bakery/images/slide_01-1.jpg" alt="" /><img src="<?php echo base_url();?>assets/bakery/images/slide_02-1.jpg"
                         alt="" /><img src="<?php echo base_url();?>assets/bakery/images/slide_03-1.jpg"
                            alt="" /><img src="<?php echo base_url();?>assets/bakery/images/slide_04-1.jpg" alt="" /><img
                                src="<?php echo base_url();?>assets/bakery/images/slide_05-1.jpg" alt="" /></div>
                <div id="slideshow-mask" class="pngfix">
                    <div class="slogan">
						<?php echo $this->lang->line('slide-text');?>
                    </div>
                </div>
            </div>
            <!-- /slideshow-wrapper -->
            <div id="logo-wrapper">
                <a href="index.htm" title="Startseite" class="active">
                    <img src="<?php echo base_url();?>assets/bakery/images/logo_de_anniversary.jpg"
                        alt="" /></a></div>
            <a name="navi-main"></a>
            <div id="navi-main-wrapper" class="clear-block">
                <div class="navi-main-left pngfix">
                </div>
                <div class="navi-main-main">
                    <ul class="menu">
                        <li class="menu-item" id="trangchu-menu">
                        	<a href="<?php echo base_url();?>" title="Home"><?php echo $this->lang->line('menu-trangchu');?></a></li>
                        <li class="menu-item" id="sanpham-menu"><a href="<?php echo base_url();?>sanpham"><?php echo $this->lang->line('menu-sanpham');?></a></li>
                        <li class="menu-item" id="giaohang-menu"><a href=""><?php echo $this->lang->line('menu-giaohang');?></a></li>
                        <li class="menu-item" id="dichvu-menu"><a href=""><?php echo $this->lang->line('menu-dichvu');?></a></li>
                        <li class="menu-item" id="tintuc-menu"><a href=""><?php echo $this->lang->line('menu-tintuc');?></a></li>
                        <li class="menu-item" id="dhe-menu"><a href=""><?php echo $this->lang->line('menu-dhe');?></a></li>
                        <li class="menu-item" id="lienhe-menu"><a href="<?php echo base_url();?>lienhe"><?php echo $this->lang->line('menu-lienhe');?></a></li>
                        <!--<li class="menu-605"><a href=""></a></li>-->
                        <li class="menu-item" id="b2b-menu"><a href=""><?php echo $this->lang->line('menu-b2b');?></a></li>
                        <li class="menu-item last" id="huongnghiep-menu"><a href=""><?php echo $this->lang->line('menu-huongnghiep');?></a></li>
                    </ul>
                </div>
                <div class="navi-main-right pngfix">
                </div>
            </div>
            <!-- /navi-main-wrapper -->
            <div class="breadcrumb">
                Trang chủ</div>
            <div id="top-bar">
                <div style="float: left; width: 30%; margin-left: 20px; margin-top: -11px;">
                    <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/bakery/images/logo1.png" height="91px" /></a></div>
                <div style="float: left; width: 66%; height: 88px;">
                    <form action="" accept-charset="UTF-8" method="post" id="search-theme-form">
                    <div>
                        <div id="search" class="container-inline">
                            <div class="form-item" id="edit-search-theme-form-1-wrapper">
                                <input type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-1"
                                    size="15" value="<?php echo $this->lang->line('header-timkiem');?>" class="form-text" />
                            </div>
                            <input type="submit" name="op" id="edit-submit" value="<?php echo $this->lang->line('header-tim');?>" class="form-submit" />
                            <input type="hidden" name="form_build_id" id="form-047b856064db17e6411a1dac13e9accf"
                                value="form-047b856064db17e6411a1dac13e9accf" />
                            <input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form" />
                        </div>
                    </div>
                    </form>
                    <div>
                        <a name="#navi-std"></a>
                        <div id="navi-std-wrapper" class="clear-block" style="float: left; width: 60%; height: 30px;
                            margin-left: 267px;">
                            <ul class="menu">
                                <li class="menu-397 first"><a href=""><?php echo $this->lang->line('header-dieukhoan');?></a></li>
                                <li class="menu-1262"><a href=""><?php echo $this->lang->line('header-cauhoi');?></a></li>
                                <li class="menu-396"><a href=""><?php echo $this->lang->line('header-nhasanxuat');?></a></li>
                                <li class="menu-400 last"><a href=""><?php echo $this->lang->line('header-dangnhap');?></a></li>
                            </ul>
                        </div>
                        <div id="langswitch" class="clear-block" style="float: left; height: 30px">
                            <ul>
                                <li class="de first active"><a href="<?php echo base_url();?>ngonngu/change/vn/<?php echo $this->uri->uri_string();?>" class="language-link active">
                                    Vietnamese</a></li>
                                <li class="en"><a href="<?php echo base_url();?>ngonngu/change/en/<?php echo $this->uri->uri_string();?>" class="language-link">English</a></li>
                                <!--<li class="hu last"><a href="html/hu.htm" tppabs="hu" class="language-link">Magyar</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /top-bar -->
        </div>
        <!-- /header -->