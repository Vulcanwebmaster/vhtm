<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php if (isset($title)) echo $title; else '5saoviet';?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/5sao/css/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/nivo-slider.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/default.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/getElementsByClassName-1.0.1.js"></script>	
	 <script type="text/javascript">
		 $(document).ready(function(){		 	
			 $('.slidemove').hide();
			 
			 var parent_ct;			 
			 <?php if (isset($current_category))
			 {?>			 
			 	var list=getElementsByClassName('menuleft-lv2');
				var category;
			 	<?php if ($_SESSION["lang"]=="vn")
			 	{?>
			 		category='<?php echo $current_category->ten_v;?>';
				<?php }
				else {?>
					category='<?php echo $current_category->ten_e;?>';
				<?php }?>
				
				var i=0;
				for (i=0;i<list.length;i++)
				{
					if (list[i].text==category)
					{
						item=list[i];
						parent_ct=item.parentNode.parentNode.parentNode;
						item.parentNode.parentNode.parentNode.style.display='block';
                                                $current=$(item.parentNode.parentNode.parentNode.parentNode);
						break;
					}
					else if (list[i].parentNode.parentNode.parentNode.parentNode.childNodes[0].text==category)
					{
					     item=list[i];
					     item.parentNode.parentNode.parentNode.style.display='block';
					     $current=$(item.parentNode.parentNode.parentNode.parentNode);
					     break;
					}
				}
				$current.addClass("cannotclose");

			 <?php }?>	

					$('.slidecontrol').children('a').mouseenter(function(){
							$(this).parent().children('.slidemove').slideDown();
					});
                    $('.slidecontrol').mouseleave(function(){
							var classname=$(this).attr("class");
                            if (classname.indexOf("cannotclose")==-1)
								$(this).children('.slidemove').slideUp();
								});

				$('.bg_itemmenu').children('ul').css('opacity','0');//.animate({opacity:0},300);				
					$('.menu-text').mouseenter(function(){
						$(this).parent().addClass('hovermenu');
						//$(this).children('.itemmenu').children('div').slideDown(300);
						$(this).parent().children('.bg_itemmenu').children('ul').animate({opacity:1,height:'100%'},300);
						$(".styleshow").css('display','none !important');
						});
					$('.submenu').mouseleave(function(){
						$(this).removeClass('hovermenu');
						//$(this).children('.itemmenu').children('div').slideUp(300);
						//$(this).children('.bg_itemmenu').children('ul').animate({opacity:0,height:'0'},300);
						});
			
				$('.bg_itemmenu').hide();				
				$('.submenu').mouseenter(function(){
					$(this).children('.bg_itemmenu').show();
					$(this).children('.bg_itemmenu').css('z-index','111');
					$(this).addClass('hovermenu');
				})
				$('.submenu').mouseleave(function(){
					if ($(this).attr('class')!='submenu cannotmodify')
					{
						$(this).children('.bg_itemmenu').hide();
						$(this).removeClass('hovermenu');
						$(this).children('.bg_itemmenu').css('z-index','10');
					}
				});				
			});
				$(window).load(function() {
					$('#slider').nivoSlider();
					//$('.nivo-control').hide();		
					
				});
	</script>
</head>
<body>
	<div id="content">
		<?php 
		$this->load->view('front/header');?>
		<div id="wrapper">
			<div id="background">
				<?php $this->load->view('front/left');?>
				<?php $this->load->view('front/content');?>
				<?php $this->load->view('front/right');?>
			</div>
			<?php $this->load->view('front/doitac');?>
		</div>
	</div>
	<?php $this->load->view('front/footer');?>
</body>
