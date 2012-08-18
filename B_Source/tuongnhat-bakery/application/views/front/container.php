<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" dir="ltr">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=8" http-equiv="X-UA-Compatible" />
    <meta name="google-site-verification" content="3uDygLHhHDKj5B_fnNhCEOjGSpw0h-FKI5LWBTVebTU" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/bakery/images/misc/deh.ico" type="image/x-icon" />
    <title><?php if (isset($title)) echo $title;
    		else echo 'Tuong Nhat Bakery';?></title>
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url();?>assets/bakery/css/css_398aefa4654252bc4c36ae2f94506dc8.css" />
   
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/bakery/css/nivo-slider.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/bakery/themes/default/default.css"/>
    <script type="text/javascript" src="<?php echo base_url();?>assets/bakery/js/js_947739bfd73690c18a3dfba113b7c80c.jsmin.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/bakery/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bakery/js/jquery.nivo.slider.js"></script>

    <script type="text/javascript">
		$(window).load(function() {

			$('#slider').nivoSlider();
			//$('.nivo-control').hide();			
		});
		$(document).ready(function(){
			$('.block-content').hide();
			$('#h3').mouseenter(function(){
				$('.block-content').slideDown();
			});
			$('#h3').mouseleave(function(){				
				$('.block-content').slideUp();
			});
			
			
			$('.block-content1').hide();
			$('#h31').mouseenter(function(){
				$('.block-content1').slideDown();
			});
			$('#h31').mouseleave(function(){				
				$('.block-content1').slideUp();
			});
			
			$('.block-content2').hide();
			$('#h32').mouseenter(function(){
				$('.block-content2').slideDown();
			});
			$('#h32').mouseleave(function(){				
				$('.block-content2').slideUp();
			});
			
			$('.block-content3').hide();
			$('#h33').mouseenter(function(){
				$('.block-content3').slideDown();
			});
			$('#h32').mouseleave(function(){				
				$('.block-content3').slideUp();
			});
			
			$('.block-content4').hide();
			$('#h34').mouseenter(function(){
				$('.block-content4').slideDown();
			});
			$('#h32').mouseleave(function(){				
				$('.block-content4').slideUp();
			});
			
			//======= hot product===============
			$('#hot-panel img').fadeTo(1000,0.6);
			$('#hot-panel img').mouseover(function(){
				$(this).fadeTo(400,1);
			});
			$('#hot-panel img').mouseout(function(){
				$(this).fadeTo(400,0.6);
			});
		});
		
    </script>
	<!--<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	jQuery.extend(Drupal.settings, { "basePath": "/", "spamspan": { "m": "spamspan", "u": "u", "d": "d", "h": "h", "t": "t" }, "extlink": { "extTarget": "_blank", "extClass": "ext", "extSubdomains": 0, "extExclude": "", "extInclude": "", "extAlert": 0, "extAlertText": "Dieser Link führt Sie zu einer externen Website zu nehmen. Wir sind nicht verantwortlich für deren Inhalt.", "mailtoClass": 0 }, "DEH": { "slides": [ "slide_01.jpg"/*tpa=http://www.entrup-haselbach.de/slide_01.jpg*/, "slide_02.jpg"/*tpa=http://www.entrup-haselbach.de/slide_02.jpg*/, "slide_03.jpg"/*tpa=http://www.entrup-haselbach.de/slide_03.jpg*/, "slide_04.jpg"/*tpa=http://www.entrup-haselbach.de/slide_04.jpg*/, "slide_05.jpg"/*tpa=http://www.entrup-haselbach.de/slide_05.jpg*/, "slide_06.jpg"/*tpa=http://www.entrup-haselbach.de/slide_06.jpg*/, "slide_07.jpg"/*tpa=http://www.entrup-haselbach.de/slide_07.jpg*/, "slide_08.jpg"/*tpa=http://www.entrup-haselbach.de/slide_08.jpg*/, "slide_09.jpg"/*tpa=http://www.entrup-haselbach.de/slide_09.jpg*/, "slide_10.jpg"/*tpa=http://www.entrup-haselbach.de/slide_10.jpg*/ ] } });
	//--><!]]>

  </head>
  <body class="front not-logged-in page-node node-type-page no-sidebars i18n-de">
	<div class="skiplinks">
	    <a href="#navi-main">Zur Hauptnavigation springen</a>
	    <a href="#navi-sub">Jump to subnavigation</a>
	    <a href="#navi-std">Jump to standards navigation</a>
	</div>
	
	<div id="page-top" class="pngfix"></div>
	
	<div id="page-wrapper" class="pngfix">
		<div id="content-wrapper" class="clear-block">
			<div id="center">
				<?php $this->load->view('front/content.php');?>
			</div>
			<?php $this->load->view('front/right.php');?>
		</div>
	 	
		 <?php $this->load->view('front/header.php');?>
		 <?php $this->load->view('front/footer.php');?>
	</div>
	 
	<div id="page-bottom" class="pngfix">
    </div>
    <script type="text/javascript" src="<?php echo base_url();?>assets/bakery/js/js_1a70e5d7476a8e976ab401602e9d16f9.jsmin.js"></script>




  </body>
  </html>