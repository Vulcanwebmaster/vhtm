<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="0mef_3XMZ9fPQCVD22aC7EbLOD7HfcP7qkuxBh9NY4k" />
<title><?=$title?></title>
<meta name="description" content="<?=$this->setting_library->setting['site_description']?>">
<meta name="keywords" content="<?=$this->setting_library->setting['site_keywords']?>">
<meta name="generator" content="Phan Gia Huy Co., Ltd. - info@phangiahuy.com, www.phangiahuy.com, 0905211588" /> 

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/site/<?=$this->site_library->get_default_template()?>/css/dinhviet.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>system/application/views/theme/system/css/system.css">
<script type="text/javascript" src="<?=base_url()?>system/application/views/theme/system/js/jquery-core.js"></script>
<!-- CSS -->
    <link href="<?=base_url()?>style/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>style/Jqueryslide.css" rel="Stylesheet" type="text/css" />
	<link href="<?=base_url()?>style/bdscomvn/jquery-ui-1.7.3.custom.css" rel="Stylesheet" type="text/css" />    
    <link href="<?=base_url()?>style/bdscomvn/BDS_Style_15.1.8.css" rel="Stylesheet" type="text/css" />    
<!-- CSS -->

<!-- Javascript -->
	<script src="<?=base_url()?>Scripts/bdscomvn/bds_jquery_1.5.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/bds_javascript_2.4.3.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/Banner.Loader_3.0.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/avim_1.1.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/tiny_mce.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/jcarousellite_1.2.js" type='text/javascript'></script>
    <script src="<?=base_url()?>Scripts/bdscomvn/message_1.1.js" type='text/javascript'></script>
    
    <script src="<?=base_url()?>Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Scripts/slide/JScriptslide1.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".slider").slideshow({
                width: 757,
                height: 277,
                transition: 'square'
            });

        });
        $(document).ready(function () {
            window.setInterval(function () {
                $("#imglogo").fadeIn(1000).delay(4000).fadeOut(1000);
            });

        });

    </script>
<!-- Hết Javascript -->

</head>
<body>
	<?=$this->load->view('theme/site/nhadat/html/quangcao2ben')?>
    <div style="width:1000px; margin:auto">
 			<?=$this->load->view('theme/site/nhadat/html/banner')?>
        <div class="gap2">
        </div>
        <!-- CỘT TRÁI-->
        <div class="nav-left">
        	<?=$this->load->view('theme/site/nhadat/html/menu_trai')?>
       </div>
        <div class="nav-right">
        <div id="home-center">
		
			<div id="slogan-container" style="height:50px;">
                <img id="slogan" alt="" src="<?php echo base_url();?>images/slogan.png"/>
            </div>

            <div id="duannoibat" style="border-bottom-style: inset; border-bottom-width: 1px; border-bottom-color: #EAFFFF">
				<?=$this->load->view('theme/site/nhadat/html/content_du_an_nb')?>
            </div>
		
<div id="top-center" style="margin-bottom: 20px">
	<div id="search-box">		
		<?=$this->load->view('theme/site/nhadat/html/boxtimkiem')?>
	</div>
	<div id="hot24-box">
		<?=$this->load->view('theme/site/nhadat/html/tinhot')?>
	</div>
</div>

<br />
<div id="main-center" style="margin-top: 10px;  float:left; width:560px">
<!--*************** AD BANNER *****************-->
 <?php if($page == "site/nhadat/index"){?>
    <div class="product-for-you">
<div class="product" id="divlistProduct">
<?php if ($_SESSION['kiemtra']==2){?>
<!--*************** HEADER OF LIST *****************-->
    <div class="tab-hb" style="margin-top:0;">
		<div id="tab0" class="tab-hb-inactive">
			<div class="tab-hb-active-left"></div>
			<div class="tab-hb-active-middle"><h2>Tip VIP</h2></div>
			<div class="tab-hb-active-right"></div>
		</div>
		<div id="tab1" class="tab-hb-active">
			<div class="tab-hb-inactive-left"></div>
			<div class="tab-hb-inactive-middle">Tin rao vặt</div>
			<div class="tab-hb-inactive-right"></div>
		</div>
    </div>
<!--*************** CONTENT OF LIST *****************-->

<!--  Goi TAB Tin Vip-->
    <div id="prd_tab0">
		<?php $this->load->view($page)?>
	</div>
  <!--  Goi TAB Tin rao vat-->
    <div id="prd_tab1" style="display:none">
		<?=$this->load->view($page."1")?>
	</div>
    
    <div id="prd_tab2" style="display:none">
    </div>
</div>
<?php } else {?>    
<!--*************** HEADER OF LIST *****************-->
    <div class="tab-hb" style="margin-top:0;">
		<div id="tab0" class="tab-hb-active">
			<div class="tab-hb-active-left"></div>
			<div class="tab-hb-active-middle"><h2>Tip VIP</h2></div>
			<div class="tab-hb-active-right"></div>
		</div>
		<div id="tab1" class="tab-hb-inactive">
			<div class="tab-hb-inactive-left"></div>
			<div class="tab-hb-inactive-middle">Tin rao vặt</div>
			<div class="tab-hb-inactive-right"></div>
		</div>
    </div>
<!--*************** CONTENT OF LIST *****************-->

<!--  Goi TAB Tin Vip-->
    <div id="prd_tab0">
		<?php $this->load->view($page)?>
	</div>
  <!--  Goi TAB Tin rao vat-->
    <div id="prd_tab1" style="display:none">
		<?=$this->load->view($page."1")?>
	</div>
    
    <div id="prd_tab2" style="display:none">
    </div>
</div>



<script type="text/javascript">
    $("#tab0").mouseover(
		function () {
		    $("#tab0").css("cursor", "default");
		    $("#divlistProduct .tab-hb-active").removeClass("tab-hb-active").addClass("tab-hb-inactive");
		    $("#divlistProduct .tab-hb-active-left").removeClass("tab-hb-active-left").addClass("tab-hb-inactive-left");
		    $("#divlistProduct .tab-hb-active-middle").removeClass("tab-hb-active-middle").addClass("tab-hb-inactive-middle");
		    $("#divlistProduct .tab-hb-active-right").removeClass("tab-hb-active-right").addClass("tab-hb-inactive-right");

		    $("#tab0").removeClass("tab-hb-inactive").addClass("tab-hb-active");
		    $("#tab0 .tab-hb-inactive-left").removeClass("tab-hb-inactive-left").addClass("tab-hb-active-left");
		    $("#tab0 .tab-hb-inactive-middle").removeClass("tab-hb-inactive-middle").addClass("tab-hb-active-middle");
		    $("#tab0 .tab-hb-inactive-right").removeClass("tab-hb-inactive-right").addClass("tab-hb-active-right");
		    $("#prd_tab0").css("display", "block");
		    $("#prd_tab1").css("display", "none");
		    $("#prd_tab2").css("display", "none");
		}
	);

    $("#tab1").mouseover(
		function () {
		    $("#tab1").css("cursor", "default");
		    $("#divlistProduct .tab-hb-active").removeClass("tab-hb-active").addClass("tab-hb-inactive");
		    $("#divlistProduct .tab-hb-active-left").removeClass("tab-hb-active-left").addClass("tab-hb-inactive-left");
		    $("#divlistProduct .tab-hb-active-middle").removeClass("tab-hb-active-middle").addClass("tab-hb-inactive-middle");
		    $("#divlistProduct .tab-hb-active-right").removeClass("tab-hb-active-right").addClass("tab-hb-inactive-right");

		    $("#tab1").removeClass("tab-hb-inactive").addClass("tab-hb-active");
		    $("#tab1 .tab-hb-inactive-left").removeClass("tab-hb-inactive-left").addClass("tab-hb-active-left");
		    $("#tab1 .tab-hb-inactive-middle").removeClass("tab-hb-inactive-middle").addClass("tab-hb-active-middle");
		    $("#tab1 .tab-hb-inactive-right").removeClass("tab-hb-inactive-right").addClass("tab-hb-active-right");
		    $("#prd_tab1").css("display", "block");
		    $("#prd_tab0").css("display", "none");
		    $("#prd_tab2").css("display", "none");
		}
		);

    $("#tab2").mouseover(
		function () {
		    $("#tab2").css("cursor", "default");
		    $("#divlistProduct .tab-hb-active").removeClass("tab-hb-active").addClass("tab-hb-inactive");
		    $("#divlistProduct .tab-hb-active-left").removeClass("tab-hb-active-left").addClass("tab-hb-inactive-left");
		    $("#divlistProduct .tab-hb-active-middle").removeClass("tab-hb-active-middle").addClass("tab-hb-inactive-middle");
		    $("#divlistProduct .tab-hb-active-right").removeClass("tab-hb-active-right").addClass("tab-hb-inactive-right");

		    $("#tab2").removeClass("tab-hb-inactive").addClass("tab-hb-active");
		    $("#tab2 .tab-hb-inactive-left").removeClass("tab-hb-inactive-left").addClass("tab-hb-active-left");
		    $("#tab2 .tab-hb-inactive-middle").removeClass("tab-hb-inactive-middle").addClass("tab-hb-active-middle");
		    $("#tab2 .tab-hb-inactive-right").removeClass("tab-hb-inactive-right").addClass("tab-hb-active-right");
		    $("#prd_tab2").css("display", "block");
		    $("#prd_tab0").css("display", "none");
		    $("#prd_tab1").css("display", "none");
		}
	);
</script>

    </div>
    <div class="lay-clear">
    </div>
    <div>
		


    </div>
    <?php }?>
    <?php } else {?>
    <!--*************** HEADER OF LIST *****************-->
    <div class="tab-hb" style="margin-top:0;">
		<div id="tab0" class="tab-hb-active">
			<div class="tab-hb-active-left"></div>
			<div class="tab-hb-active-middle"><h2>Chi tiết rao vặt</h2></div>
			<div class="tab-hb-active-right"></div>
		</div>
    </div>
<!--*************** CONTENT OF LIST *****************-->

<!--  Goi chi tiet rao vat-->
    <div id="prd_tab0">
		<?=$this->load->view($page)?>
	</div>
    
    <div id="prd_tab2" style="display:none">
    </div>
    <?php }?>	
<div id="hot24-content" style="display:none;">
               
</div>
	
<!--*************** AD TIN TUC*****************-->
<div class="lay-clear"></div>    
 
    <div id="new-article">
		
    </div>
    <div class="lay-clear">
    </div>
<!-- TIN TUC MOI -->
<div id="contruct">
        
<div class="tab-hb">
    <div class="tab-hb-active" id="handbook_tab0">
        <div class="tab-hb-active-left">
        </div>
        <div class="tab-hb-active-middle">
            <span style="cursor: default">            
                Tin tức mới
            </span>
        </div>
        <div class="tab-hb-active-right">
        </div>
    </div>
</div>



<div class="lay-clear">
</div>
<!-- Noi dung tab tin tuc moi -->
<div class="hb-data" id="handbook0">
<?=$this->load->view('modules/tnd_tintucmoi/index')?>


<div class="lay-clear">
</div>




</div>



    </div>
    
<!-- VIDEO NOI BAT -->
<div id="contruct">
        
<div class="tab-hb">
    <div class="tab-hb-active" id="handbook_tab0">
        <div class="tab-hb-active-left">
        </div>
        <div class="tab-hb-active-middle">
            <span style="cursor: default">            
                Video nổi bật
            </span>
        </div>
        <div class="tab-hb-active-right">
        </div>
    </div>
</div>



<div class="lay-clear">
</div>
<!-- Noi dung tab Video noi bat -->
<div class="hb-data" id="handbook0">
<div class="lay-clear">
</div>

<div class="art-latest">
    <div class="art-item">
        <ul>
            
            <li><a href="javascript:if(confirm('http://vatlieuxaydung.batdongsan.com.vn/am-dam-thi-truong-thep-JtvWRZZcL081.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://vatlieuxaydung.batdongsan.com.vn/am-dam-thi-truong-thep-JtvWRZZcL081.html'">
                Ảm đạm thị trường thép
            </a>
            
            </li>
            
            <li><a href="javascript:if(confirm('http://congtrinhdocdao.batdongsan.com.vn/10-dia-danh-noi-tieng-tay-ban-nha-Ud2sd0JZE0E1.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://congtrinhdocdao.batdongsan.com.vn/10-dia-danh-noi-tieng-tay-ban-nha-Ud2sd0JZE0E1.html'">
                10 địa danh nổi tiếng ở Tây Ban Nha
            </a>
            
            </li>
            
            <li><a href="javascript:if(confirm('http://phongthuyvanphong.batdongsan.com.vn/trong-kien-truc-kinh-doanh-SsTNEg0q_6I1.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://phongthuyvanphong.batdongsan.com.vn/trong-kien-truc-kinh-doanh-SsTNEg0q_6I1.html'">
                Phong thủy trong Kiến trúc và Kinh doanh
            </a>
            
            </li>
            
            <li><a href="javascript:if(confirm('http://thegioikientruc.batdongsan.com.vn/thiet-ke-doc-dao-cua-toa-nha-al-hamra-firdous-tower-HTAdg83zwMk1.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://thegioikientruc.batdongsan.com.vn/thiet-ke-doc-dao-cua-toa-nha-al-hamra-firdous-tower-HTAdg83zwMk1.html'">
                Thiết kế độc đáo của tòa nhà Al Hamra Firdous Tower
            </a>
            
            </li>
            
            <li><a href="javascript:if(confirm('http://congtrinhdocdao.batdongsan.com.vn/chiem-nguong-tru-so-bi-mat-dep-long-lanh-cua-apple-OY2x9wEj-KE1.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://congtrinhdocdao.batdongsan.com.vn/chiem-nguong-tru-so-bi-mat-dep-long-lanh-cua-apple-OY2x9wEj-KE1.html'" >
                Chiêm ngưỡng trụ sở bí mật đẹp long lanh của Apple
            </a>
            
            </li>
            
        </ul>
    </div>
    <div id="video-container">
        <object width="100%" height="210px">
           <param name="movie" value="video/Export.swf">
           <embed src="video/Export.swf" width="100%" height="210px" />
        </object>
    </div>
</div>


</div>



    </div>	
</div>
<div id="right-center" style="width:180px; float:right; margin-right:15px; margin-top:10px">
	<div class="rightContent left-side">     
		
        <div id="lienhetructuyen" style="margin-bottom:10px">
            <div style="width: 177px; height: 30px; background: url('<?php echo base_url();?>images/bghotrotructuyen.png') no-repeat;
                            margin-top: 5px;">
                        </div>
                        <div class="right_panel" style="width: 175px; border-left: 1px #0088f4 solid; border-right: 1px #0088f4 solid;
                            border-bottom: 1px #0088f4 solid;">
                            <div style="margin-left: 10px; width: 165px;">
                                <div style="color: #f66c03; padding: 5px; width: 155px">
                                    <strong>TƯ VẤN MUA BÁN</strong></div>
                                <div style="color: #006de8; padding: 5px; width: 155px;">
                                    <strong>Mr. Tài</strong></div>
                                <div style="color: #355f9d; padding: 5px; width: 155px;">
                                    <div style="width: 27px; height: 24px; float: left"">
                                        <img src="<?php echo base_url();?>images/bds_12.gif"
                                            width="27" height="24" /></div>
                                    <div style="padding-left: 5px; font-size: 12px; width: 123px;">
                                        <strong>0904.631535 04.85858684</strong></div>
                                </div>
                                <div style="padding-left: 5px; width: 155px; padding-bottom: 10px">
                                    <a href="ymsgr:sendim?toannv_82">
                                        <img border="0" src="<?php echo base_url();?>images/onlinetoan.gif" width="125"
                                            height="25"></a></div>
                                <div style="color: #006de8; padding: 5px; width: 155px;">
                                    <strong>Mrs. Huệ</strong></div>
                                <div style="color: #355f9d; padding: 5px; width: 155px;">
                                    <div style="width: 27px; height: 24px; float: left">
                                        <img src="<?php echo base_url();?>images/bds_12.gif"
                                            width="27" height="24" /></div>
                                    <div style="padding-left: 5px; font-size: 12px; width: 123px;">
                                        <strong>0913.161993 04.39959519</strong></div>
                                </div>
                                <div style="padding-left: 5px; width: 155px; padding-bottom: 10px">
                                    <a href="ymsgr:sendim?bebu_263">
                                        <img border="0" src="<?php echo base_url();?>images/onlinebebu.gif" width="125"
                                            height="25"></a></div>
                            </div>
                        </div>
        </div>

        <div id="danhgia" style="padding-top:10px">
            <h4 style="color: #FFFFFF; text-align: center;" align="right">ĐÁNH GIÁ WEBSITE</h4>
            <form style="padding-left:10px;padding-top:10px">
                <p style="padding-top:10px"><input type="radio" name="group1" />Đẹp</p>
                <p style="padding-top:10px"><input type="radio" name="group1" />Bình thường</p>
                <p style="padding-top:10px"><input type="radio" name="group1" />Xấu</p>
            </form>
            <center>
                <button style="height:24px; margin-left:95px">đánh giá</button>
            </center>
        </div>

<div class="rc4 iebleft"><div class="iebright">
    <div class="rc41 white">
        <div class="ierightcorner">
        <h4>Tiêu điểm tuần qua</h4>
    </div></div>
    <!-- Chiều cao tối thiểu luôn hiển thị đủ 6 tin -->
    <div class="rc42 rc42-tabart ablack">
        <div class="rc421">
            
            <ul>
                
                <li>
                    <a rel = 'nofollow'>Tin tức, dự án BĐS nổi bật tuần từ ngày 2/4 đến ngày 8/4</a>                    
                    
                </li>
                
                <li>
                    <a rel = 'nofollow'>Giá đền bù sẽ cao hơn khi bỏ khung giá đất?</a>                    
                    
                </li>
                
                <li>
                    <a rel = 'nofollow'>Giá đất Hà Nội "đắt" hơn từ 25% so với bảng giá đất</a>                    
                    
                </li>
                
                <li>
                    <a rel = 'nofollow'>Nguy cơ đổ bể hàng loạt dự án của AZ Land</a>                    
                    
                </li>
                
                <li>
                    <a rel = 'nofollow'>Công khai mua bán đất nông nghiệp: Khó xử lý vì thiếu chỉ giới quy hoạch</a>                    
                    
                </li>
                
                <li>
                    <a rel = 'nofollow'>Tin tức bất động sản nổi bật tuần từ 26-31/3</a>                    
                    
                </li>
                
            </ul>
        </div>
    </div>
</div></div>
<div class="separable"></div>
<div class="rc4 iebleft"><div class="iebright">
    <div class="rc41 white">
        <div class="ierightcorner">
       <h4>Lời khuyên</h4>        
    </div></div>
    <div class="rc42 rc42-tabart ablack">
        <div class="rc421"><ul>
            
                <li>
                    <a rel="nofollow">Bí quyết tìm kiếm các trung tâm môi giới nhà đất</a>
                </li>
                
                <li>
                    <a rel="nofollow">Doanh nghiệp bán nền đất "ảo" tại Cần Thơ</a>
                </li>
                
                <li>
                    <a rel="nofollow">Bình Dương: Bỏ tiền tỷ mua đất mang "sổ đỏ" giả</a>
                </li>
                
                <li>
                    <a rel="nofollow">Một vài kinh nghiệm bán nhà nhanh gọn và được giá</a>
                    
                </li>
                
                <li>
                    <a rel="nofollow">36 kế bán hàng được doanh nghiệp BĐS áp dụng (P3)</a>
                    
                </li>
                
                <li>
                    <a rel="nofollow">36 kế bán hàng được doanh nghiệp BĐS áp dụng (P2)</a>
                    
                </li>
                
            </ul>
        </div>
    </div>
</div></div>
        <div class="separable"></div>
        
<!--
	09/12/2011: Chuyển tiêu đề box thành link tới trang Hỏi đáp và rel = "nofollow"
-->

<div class="rc3 iebleft"><div class="iebright">
    <div class="rc31 white">
        <div class="ierightcorner">
			
            <h4><a rel="nofollow">HỎI- ĐÁP</a></h4>
            
        </div></div>
    <div class="rc32 ablack">
        


<div class="rc321">

    <label>Gửi câu hỏi của bạn tại đây</label>    
    <form name="form1" action = "<?php echo base_url();?>hoidap" method="post">
        <textarea id="questionTitle" name="questionTitle" rows="4" cols="10"></textarea>
        <div style="margin-top:5px;">
            <input type="submit" onclick="" value="Gửi câu hỏi" />
        </div>
        <input type="hidden" id="questionContent" name="questionContent" value=""/>
        <input id="CategoryId" name="CategoryId" type="hidden" value="" />
            <input id="JobId" name="JobId" type="hidden" value="" />
            <input id="ProjectId" name="ProjectId" type="hidden" value="" />
            <input id="ProductId" name="ProductId" type="hidden" value="" />
            <input id="ArticleId" name="ArticleId" type="hidden" value="" />
            <input id="BrokerId" name="BrokerId" type="hidden" value="" />
            <input id="CompanyId" name="CompanyId" type="hidden" value="" />
            <input id="EnterpriseId" name="EnterpriseId" type="hidden" value="" />
        
	</form>
	<script type="text/javascript">
	    function getvalue() {
	        var text = $('#questionTitle').val();
	        text = text.replace(/\n\r?/g, '<br/>');
	    }
	    </script>
	
</div>
    </div>            
</div></div>

<!-- Vach ngan cach -->
        <div class="separable"></div>
        
<div class="box-bg-right">
    <ul>
        <li style="padding: 3px 0"><a href="#"><img src="<?php echo base_url();?>images/bdscomvn/Info.png" width="24px" height="24px" alt="" />XEM PHONG THỦY THEO TUỔI</a></li>
        <li><a href="#"><img src="<?php echo base_url();?>images/bdscomvn/coins.png" width="24px" height="24px" alt="" />TÍNH LÃI SUẤT</a></li>
    </ul>
</div>
<div class="separable"></div>
		
    </div>
</div>                        
</div>
</div>

        <div class="bottomline">
        </div>
		<?=$this->load->view("theme/site/nhadat/html/footer")?>
</body>
</html>
        
