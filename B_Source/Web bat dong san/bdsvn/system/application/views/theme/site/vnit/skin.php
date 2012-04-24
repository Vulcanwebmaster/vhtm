<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$title?></title>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/tabs.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/templates.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>


</head>
<body id="page_bg" onload="loadpage()" class="color_green bg_white width_fmax">
<a name="up" id="up"></a>
<div class="center" align="center">
    <div id="wrapper">
        <div id="wrapper_r">
            <div id="header">
                <div id="header_l">
                    <div id="header_r">
                        <div id="logo">
                        <div id="mainmenu">
                             <ul>
                                <li>Tài liệu</li>
                                <li>Nhạc</li>
                                <li>Phim</li>
                             </ul>
                        </div>
                            <a href="<?=base_url()?>">
                            <img src="<?php echo base_url() ?>system/application/views/theme/site/vnit/images/logo.png">
                            </a>
                        </div>
                        <div id="header_right">
                        <div class="quangcao"></div>
                        <div class="action">
                            <div class="menu">
                                <ul>
                                    
                                    
                                    <li><?=anchor('huongdan.html','Hướng dẫn tải tải liệu')?></li>
                                    <li><?=anchor('dangky.html','Đăng ký thành viên')?></li>
                                    <li><?=anchor(base_url(),'Trang chủ')?></li>
                                    
                                </ul>
                            </div>
                            <div class="dangnhap">
                                 <?=$this->load->view('theme/site/vnit/html/dangnhap')?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tabarea">
                <div id="tabarea_l">
                    <div id="tabarea_r">

                    </div>
                </div>
            </div>

            <div id="pathway">
                
            </div>

            <div class="clr"></div>

            <div id="whitebox">
                <div id="whitebox_t">
                    <div id="whitebox_tl">
                        <div id="whitebox_tr"></div>
                    </div>
                </div>

                <div id="whitebox_m">
                    <div id="area">


                              <?php $this->load->view( $page); ?>  

                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>

                <div id="whitebox_b">
                    <div id="whitebox_bl">
                        <div id="whitebox_br"></div>
                    </div>
                </div>
            </div>

            <div id="footerspacer"></div>
        </div>

        <div id="footer">
            <div id="footer_l">
                <div id="footer_r">
                    <p id="syndicate">
                        
                    </p>
                    <p id="power_by">
                        Designed by <a target="_blank" href="http://360vnit.com"><img src="http://360vnit.com/uploads/logo/logo_small.png"></a>.    
            
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <jdoc:include type="modules" name="debug" />  -->

</body>
</html>
        
