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
		<div id="main-center" style="margin-top: 10px;  float:left; width:560px">
			<?if($this->session->flashdata('message')){
		    echo '<div class="message">'.$this->session->flashdata('message').'</div>';
		}if($this->session->flashdata('error')){
		    echo '<div class="error">'.$this->session->flashdata('error').'</div>';
		}if($this->session->flashdata('notes')){
		    echo '<div class="notes">'.$this->session->flashdata('notes').'</div>';
		}

?>   
				<?=$this->load->view($page)?>
		</div>

<?php if($page != "site/tintuc/index") {?>	
<div id="right-center" style="width:180px; float:right; margin-right:15px; margin-top:10px">
	<div class="rightContent left-side">     
		
        <div id="lienhetructuyen" style="margin-bottom:10px">
            <div style="width: 177px; height: 30px; background: url('<?php echo base_url();?>images/bghotrotructuyen.png') no-repeat;
                            margin-top: 5px;">
                        </div>
                        <div class="right_panel" style="width: 175px; border-left: 1px #0088f4 solid; border-right: 1px #0088f4 solid;
                            border-bottom: 1px #0088f4 solid;">
                            <div style="margin-left: 10px; width: 165px;">
                            <? $this->CI = get_instance();?>
                            <?php 
								$this->db->where('id_group','22');
			    				$query = $this->db->get('thanhvien');
								$item = $query->result();
								//$this->db->where()?>
								
                                <div style="color: #f66c03; padding: 5px; width: 155px">
                                    <strong>TƯ VẤN MUA BÁN</strong></div>
								<?foreach($item as $rs):?>
									<div style="color: #006de8; padding: 5px; width: 155px;">
                                    	<strong><? echo $rs->fullname;?></strong></div>
                                	<div style="color: #355f9d; padding: 5px; width: 155px;">
                                    <div style="width: 27px; height: 24px; float: left"">
                                        <img src="<?php echo base_url();?>images/bds_12.gif"
                                            width="27" height="24" /></div>
                                    <div style="padding-left: 5px; font-size: 12px; width: 123px;">
                                        <strong><?php echo $rs->username;?></strong></div>
                                </div>
                                <div style="padding-left: 5px; width: 155px; padding-bottom: 10px">
                                    <a href="ymsgr:sendim?<?php echo $rs->email;?>">
                                        <img border="0" src="http://opi.yahoo.com/online?u=<?php echo $rs->email;?>&amp;m=g&amp;t=2&amp;l=us" width="125"
                                            height="25"></a></div>
                                <?endforeach;?>
                        	</div>
                        </div>
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
			<? $this->CI = get_instance();?>
    		<?
			    $this->db->where('bat',"1");
			    $this->db->order_by('luotxem','DESC');
			    $query = $this->db->get('noidung','7');
			    $item = $query->result();?>
			    <?foreach($item as $rs):?>
					<li>
	                    <a rel = 'nofollow' href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>">
	                                        <?=$rs->tieude?></a>
					</li>
				<?endforeach;?>
                
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
        <div class="rc421">
        <ul>
			<? $this->CI = get_instance();?>
    		<?
			    $this->db->where('idcat',"55");
			    $query = $this->db->get('noidung');
			    $item = $query->result();?>
			    <?foreach($item as $rs):?>
					<li>
	                    <a rel = 'nofollow' href="<?=base_url()?>tintuc/chi-tiet/<?=$rs->idcat?>/<?=$rs->id?>/<?=$rs->alias.duoi()?>">
	                                        <?=$rs->tieude?></a>
					</li>
				<?endforeach;?>
                
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
        

<div class="separable"></div>
		
    </div>
</div>
<?php }?>                        
</div>
        <div class="bottomline">
        </div>
		<?=$this->load->view("theme/site/nhadat/html/footer")?>
</div>


</body>
</html>
        
