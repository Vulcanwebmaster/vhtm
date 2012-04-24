<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<title><?=$title?></title>
<link rel="shortcut icon" href="<?=base_url()?>skins/favicon.ico" type="image/x-icon" />  
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/tintuc.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/skin.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/tv.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
</head>
<body>
<div class="wrapper_full">
<div class="wrap"> 
    <div class="header clearfix">
        <div class="headtop">
             <div class="logo">
                <img src="<?=base_url()?>skins/tv.png" alt="">  
             </div>
             <div class="adv">
             <?=$this->load->view('modules/tnd_app/index')?> 
                   <?=$this->load->view('modules/tnd_quangcao/tv_banner')?>
             </div>
        </div>

        <div class="menu ">
              <?=$this->load->view('modules/tnd_menu_navhome/index')?>
        </div>          
    </div>
    <div class="wrapper clearfix">
    <div class="wrapper_inc">
        <div class="content">
           <div id="wrap_left" style="width: 200px;" class="fl"> 
                <div class="remote">
                    <div class="kenhvtv">
                        <ul>
                            <li class="vtv">
                                <a href="<?=base_url()?>tv/vtv1.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtv1.png" alt="">
                                </a>
							</li>
                            <li class="vtv">
                                <a href="<?=base_url()?>tv/vtv2.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtv2.png" alt="">
                                </a>
                             </li>
                            <li class="vtv">
                                <a href="<?=base_url()?>tv/vtv3.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtv3.png" alt="">
                                </a>
                            </li>
                            <li class="vtv">
                                <a href="<?=base_url()?>tv/vtv4.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtv4.png" alt="">
                                </a>
                            </li>                
                        </ul>
                    </div>           
                    <div class="kenh">
                        <ul>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc1.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc1.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc2.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc2.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc3.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc3.png" alt="">
                                </a>
                            </li>    
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc4.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc4.png" alt="">
                                </a>
                            </li>                                     
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc8.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc8.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc9.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc9.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc10.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc10.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vtc16.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vtc16.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/infotv.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/infotv.png" alt="">
                                </a>
                            </li>
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/itv.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/itv.png" alt="">
                                </a>
                            </li>                    
                            
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/mytv.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/mytv.png" alt="">
                                </a>
                            </li> 
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/vctv12.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vctv12.png" alt="">
                                </a>
                            </li>                                        
                             <li class="vtc">
                                <a href="<?=base_url()?>tv/thtg.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/tiengiang.png" alt="">
                                </a>
                            </li>                   
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/thvl1.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vinhlong1.png" alt="">
                                </a>
                            </li>                    
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/thvl2.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vinhlong2.png" alt="">
                                </a>
                            </li>                    
                            <li class="vtc">
                                <a href="<?=base_url()?>tv/tuoitre.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/tuoitre.png" alt="">
                                </a>
                            </li>                     
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                    <div class="kenhhtv">
                          <ul>
                             <li>
                                 <a href="<?=base_url()?>tv/hv1.html"> 
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/hv1.png" alt="">
                                 </a>
                             </li>
                             <li>
                                 <a href="<?=base_url()?>tv/htv7.html"> 
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/htv7.png" alt="">
                                  </a>
                             </li>
                             <li>
                                <a href="<?=base_url()?>tv/htv9.html"> 
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/htv9.png" alt="">
                                </a>
                             </li>

                          </ul>
                    </div>
                    
                    <div class="kenhvov">
                          <ul>
                             <li>
                                <a href="<?=base_url()?>tv/vov1.html"> 
                             <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vov1.png" alt="">
                                </a> 
                             </li>
                             <li>
                                <a href="<?=base_url()?>tv/vov2.html"> 
                             <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vov2.png" alt="">
                                </a> 
                             </li>
                             <li>
                                <a href="<?=base_url()?>tv/vov3.html"> 
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vov3.png" alt="">
                                 </a>
                             </li>
                             <li>
                                <a href="<?=base_url()?>tv/vov5.html">
                                    <img src="<?=base_url()?>system/application/views/theme/site/vnit/images/tv/vov5.png" alt="">
                                </a> 
                             </li>

                          </ul>
                    </div>            
                   </div>
           </div>
           <div style="width: 790px;" class="fr">
                <div style="width: 530px;" class="fl">
                    <div>                  
                        <div class="tv">
                            <div class="toptv"><?=$tieude?></div>
                            <div class="midtv">
                            <?php $this->load->view( $page); ?>  
                            </div>
                            <div class="bottv"></div>
                        </div>                    
                    </div> 
                </div>
                <div style="width: 255px;" class="fr">
                <?=$this->load->view('modules/tnd_quangcao/tv_home_right')?>                     
                </div>
           </div> 


            <div style="height: 35px;width: 100%;float: left;"></div> 
            <div style="width: 100%;float: left;">
                <div class="content_text">
                <p>
                    <b>Copyright &copy; 2010 - Cổng thông tin học tập và giải trí Việt v2.0</b><br> 
                    Support: ĐT: 0989284278 - Email: tranngocduoc@gmail.com<br>
                    Ghi rõ nguồn "DENDOMDOM" khi phát hành lại thông tin từ website này
                     <br>
                  </p> 
                 <p>
                  <?=$this->load->view('modules/tnd_online/index')?>
                  </p>           
                </div>
                
            </div>
        </div>
    </div>
    </div>
</div>
</div>  
<?=$this->load->view('theme/site/vnit/html/ga')?>  
</body>
</html>
