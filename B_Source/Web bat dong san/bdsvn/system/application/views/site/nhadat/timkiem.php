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
 <div class="box">
    <div class="title">KẾT QUẢ TÌM KIẾM</div>
    <?if(count($list) >0){?>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
    <?
    $k=0;
    foreach($list as $rs):
    $tp = $this->load_library->loadcity($rs->id_thanhpho);
    $quan = $this->load_library->loadcity($rs->id_quan);
    ?>
         <tr class="row0">
            <td class="ctheloai" style="padding: 3px;">
                <div style="background: url(<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>) no-repeat;border: 1px solid #e5e5e5;padding: 0px;width: 60px;height: 40px;">
                    <img src="<?=base_url()?>uploads/spacer.gif" alt="">
                 </div>
            </td>  
            <td class="ctieude">
                <div>
                    <a title="<?=$rs->tieude?>" href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>">
                        <?=$this->string_library->catchu($rs->tieude,60)?>
                    </a>
                </div>
                <div class="dt"><?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?></div>
                <div class="gia">Giá: <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></div>
            </td>
            <td class="cdate">
                <?=$this->string_library->format_date($rs->batdau,'d-m')?><br>
                <img src="<?=base_url()?>skins/vip.gif" alt="">
            </td>
            <td class="cthanhpho">
                <a href="<?=base_url()?>khuvuc/<?=$tp->idthanhpho?>/index.html"><?=$tp->ten?></a>
                <br>
                <?if($quan){?>
                <a href="<?=base_url()?>khuvuc/<?=$quan->idthanhpho?>/index.html"><?=$quan->ten?></a>
                <?}?>
            </td>
        </tr> 

    <?$k=1-$k;
    endforeach;?>           
    </table> 
    <div class="pages"><?=$pagination?></div>
    <?}else{?>
        <div style="text-align: center;">Không tìm thấy kết quả tìm kiếm</div>
    <?}?>
</div>
<script>
function GoToPage(page_no)      
 {     
    var nhucau='<?=$nhucau?>';
    var sectionid='<?=$sectionid?>';
    var giatu='<?=$giatu?>';
    var giaden='<?=$giaden?>';
    var id_thanhpho='<?=$id_thanhpho?>';
    var idhuong='<?=$idhuong?>';
    var item_per_page='<?=$limit?>';
        $("#nhadat").html('<div align="center"><image src="<?=base_url()?>skins/loading.gif"></div>');

        $.post("<?=base_url()?>nhadat/timkiem/",{'page_no':page_no,'item_per_page':item_per_page,'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                
                $("#nhadat").html(data);
            });
}

</script>
</div>
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
		</div>
</body>
</html>
        
<!-- 
<div class="box">
    <div class="title">KẾT QUẢ TÌM KIẾM</div>
    <?if(count($list) >0){?>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
    <?
    $k=0;
    foreach($list as $rs):
    $tp = $this->load_library->loadcity($rs->id_thanhpho);
    $quan = $this->load_library->loadcity($rs->id_quan);
    ?>
         <tr class="row0">
            <td class="ctheloai" style="padding: 3px;">
                <div style="background: url(<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>) no-repeat;border: 1px solid #e5e5e5;padding: 0px;width: 60px;height: 40px;">
                    <img src="<?=base_url()?>uploads/spacer.gif" alt="">
                 </div>
            </td>  
            <td class="ctieude">
                <div>
                    <a title="<?=$rs->tieude?>" href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>">
                        <?=$this->string_library->catchu($rs->tieude,60)?>
                    </a>
                </div>
                <div class="dt"><?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?></div>
                <div class="gia">Giá: <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></div>
            </td>
            <td class="cdate">
                <?=$this->string_library->format_date($rs->batdau,'d-m')?><br>
                <img src="<?=base_url()?>skins/vip.gif" alt="">
            </td>
            <td class="cthanhpho">
                <a href="<?=base_url()?>khuvuc/<?=$tp->idthanhpho?>/index.html"><?=$tp->ten?></a>
                <br>
                <?if($quan){?>
                <a href="<?=base_url()?>khuvuc/<?=$quan->idthanhpho?>/index.html"><?=$quan->ten?></a>
                <?}?>
            </td>
        </tr> 

    <?$k=1-$k;
    endforeach;?>           
    </table> 
    <div class="pages"><?=$pagination?></div>
    <?}else{?>
        <div style="text-align: center;">Không tìm thấy kết quả tìm kiếm</div>
    <?}?>
</div>
<script>
function GoToPage(page_no)      
 {     
    var nhucau='<?=$nhucau?>';
    var sectionid='<?=$sectionid?>';
    var giatu='<?=$giatu?>';
    var giaden='<?=$giaden?>';
    var id_thanhpho='<?=$id_thanhpho?>';
    var idhuong='<?=$idhuong?>';
    var item_per_page='<?=$limit?>';
        $("#nhadat").html('<div align="center"><image src="<?=base_url()?>skins/loading.gif"></div>');

        $.post("<?=base_url()?>nhadat/timkiem/",{'page_no':page_no,'item_per_page':item_per_page,'nhucau':nhucau,'sectionid':sectionid,'giatu':giatu,'giaden':giaden,'id_thanhpho':id_thanhpho,'idhuong':idhuong},function(data)
            {
                
                $("#nhadat").html(data);
            });
}

</script>
 -->