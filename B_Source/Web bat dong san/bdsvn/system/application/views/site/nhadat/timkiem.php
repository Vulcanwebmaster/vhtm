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
        <!-- CỘT TRÁI-->
        <div class="nav-left">
        	<?=$this->load->view('theme/site/nhadat/html/menu_trai')?>
       </div>
        <div class="nav-right">
        <div id="home-center">
		



 
<br />
<div id="main-center" style="margin-top: 10px;  float:left; width:710px">
<!--*************** AD BANNER *****************-->
 <div class="box">
    <div class="title"><?php echo $tieudetimkiem;?></div>
    <?if(count($list) >0){?>
    <?
    $k=0;
    foreach($list as $rs):
    $tp = $this->load_library->loadcity($rs->id_thanhpho);
    $quan = $this->load_library->loadcity($rs->id_quan);
    ?>
    <div class="product" id="divlistProduct"> 
	 <div class="prd-content"  style="border-top: 2px solid red; margin-top: -2px;">
        <ul>
            <li class="vip1" style="margin-top: -2px; padding: 10px 1px 0 1px; border-top: none;">
        <div class="ct-content">
        	<div class="ct-home">    
				<h3>
                    <a title="<?=$rs->tieude?>"href="<?=base_url()?>chi-tiet/<?=$this->string_library->stringchange($this->load_library->loadnhucau($rs->nhucau))?>/<?=$rs->idtin?>/<?=$rs->url_tieude.duoi()?>"><?=$this->string_library->catchu($rs->tieude,60)?></a>
				</h3>       
			<div>
				<div class="photo">
					<div >
						<img src="<?if($this->load_library->loadimg($rs->idtin)){echo base_url().$this->load_library->loadimg($rs->idtin)->normal;}?>" alt="">
					</div>
				</div>                
				<div class="pcontent">                          
					<?=$this->string_library->catchu($rs->noidung,300)?> 
				</div>
			</div>
                <div>
                    <div class="info">
                        <div style="float:left">
                            Giá: <span>
                            <?php echo $rs->giathue ? number_format($rs->giathue, 0, ',',',')." VNĐ / ".(($rs->matbang=='m2') ? " m<sup>2</sup>": $rs->matbang ): "Thương lượng";?></span>
                             
                            Diện tích: <span>
                            <?if($rs->dai==0){echo stripos($rs->dientich, 'ha') ? 'Diện tích: '.$rs->dientich : 'Diện tích: '.$rs->dientich.' m<sup>2</sup>';}else{ echo 'Rộng x Dài: '.$rs->rong; echo ' x '.$rs->dai.' m';}?> </span>   
                            Quận/huyện: 
                            
                            <span>
							<?if($quan){?>
                			<?=$quan->ten?>
                			<?}?>
                			<?php echo " , "?> 
							<?=$tp->ten?>
                            </span>
                        </div>
                         
                    </div>
                </div>                

        </div>
    </div>
            </li> 
        </ul>
    </div>
</div>
    <?$k=1-$k;
    endforeach;?>           
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
</div>
<div class="separable"></div>
		
    </div>
</div>                        

        <div class="bottomline"></div>
		<?=$this->load->view("theme/site/nhadat/html/footer")?>
</div>
</body>
</html>        