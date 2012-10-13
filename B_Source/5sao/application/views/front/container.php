<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php if (isset($title)) echo $title; else '5saoviet';?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/5sao/css/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/nivo-slider.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/5sao/css/default.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/5sao/js/jquery.nivo.slider.js"></script>
	 <script type="text/javascript">
		 $(document).ready(function(){
			 $('.slidemove').hide();
			 var parent_ct;
			 <?php if (isset($current_category))
			 {?>
			 	var list=document.getElementsByClassName('menuleft-lv2');

			 	<?php if ($lang=="vn")
			 	{?>
			 		category='<?php echo $current_category->ten_v;?>';
				<?php }
				else {?>
					category='<?php echo $current_category->ten_e;?>';
				<?php }?>
				for (var i=0;i<list.length;i++)
				{
					if (list[i].text==category)
					{
						item=list[i];
						parent_ct=item.parentNode.parentNode.parentNode;
						item.parentNode.parentNode.parentNode.style.display='block';
						break;
					}
				}
			 <?php }?>
			 
			  
					$('.slidecontrol').click(function(){
						$(this).children('.slidemove').slideDown();
						});
					$('.slidecontrol').mouseleave(function(){
						if (parent_ct!=undefined)
						{
							var parent=parent_ct.parentNode;
							var listChildren=parent.childNodes;
						
							if ($(this).children('a').text()!=listChildren[0].text)
							{	
								$(this).children('.slidemove').slideUp();
							}
						}
						else $(this).children('.slidemove').slideUp();
						});
				$('.itemmenu').hide();
					$('.submenu').mouseenter(function(){
						$(this).children('.itemmenu').slideDown();
						});
					$('.submenu, .itemmenu').mouseleave(function(){
						$(this).children('.itemmenu').slideUp();
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
		<?php $this->load->view('front/header');?>
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