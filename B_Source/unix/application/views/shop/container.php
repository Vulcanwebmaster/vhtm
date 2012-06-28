<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		
		<!-- ========SLIDE============= -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/pascal/pascal.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/orman/orman.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/nivo-slider.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/style.css" type="text/css" media="screen" />
	    
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery-1.7.1.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery.nivo.slider.pack.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	    
	    <!-- =============UNIFORM============== -->
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/unix/css/uniform.default.css" type="text/css"/>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/unix/js/jquery.uniform.js"></script>
	    <script type="text/javascript" charset="utf-8">
	      $(function(){
	        $("#list-type, .input-lienhe, #submit").uniform();
	      });
	    </script>
	    <!-- ====================================== -->
	    
	    <link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>/assets/unix/css/style1.css"/>
	    
	    <!-- ==================================MENU============================= -->
	   
		<script type="text/javascript">
			$(document).ready(function(){
				var top = $("#nav > li").position().top + $("#nav > li").height();
				$('.menuitem ul').css('display','block');
				$('.menuitem ul').slideUp(1000);
				$('.menuitem').mouseenter(function(){
					var left = $(this).position().left; //get the postion of the main link relative to the <body>
					var offset = $(this).offset().left; //get the position of the main link relative to the document
					var width = $(this).children("ul").width(); //get the width of the dropdown
					var over = (left + width) - 940;
					
					$(this).children('ul').slideDown(1000);
					//$(this).children('ul').css({left:left-over, top:top});
				});
				$('.menuitem').mouseleave(function(){
					$(this).children('ul').slideUp(1000);
					//$(this).children('ul').css({left:left-over, top:top});
				});
			});
		</script>
	    <!-- =================================================================== -->
	</head>
	<body>
		<object width="1" height="1"><param name="movie" value="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><embed width="1" height="1" src="http://static.mp3.zing.vn/skins/mp3_main/flash/player/mp3Player_skin1.swf?xmlurl=http://mp3.zing.vn/blog?MjAxMC8xMS8wNi82LzQvInagaMENjRhNzM4MDhlNDgyMDMxN2QxMDNhZmU5NWRjMTYyMWEdUngWeBXAzfFNhWeBnRvInagaMEmUsICmldUngaXxZYW5dUngaXwxfDI" quality="high" wmode="transparent" type="application/x-shockwave-flash"></embed></object><br />
	    
	    <script type="text/javascript">
			$(document).ready(function(){
				
				$('#mask').hide();
				$('#register').click(function(){
					$('#mask').slideDown(1000);
				});
				$('#maskClose').click(function(){
					$('#mask').slideUp(1000);
				});
			});
		</script>
	    
		
		
		<?php $this->load->view('shop/header.php')?>
		<div id="mask" style="text-align:center;padding: 20px; text-shadow: black 0px -1px 0px; color: white; position: fixed; width: 600px; height: auto; margin-top: 0; margin-left:350px; background-color: rgb(90, 90, 90); border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; z-index: 9; border: 4px solid rgb(182, 182, 181); display: block; ">
			<div style="width:30px; cursor:pointer; border-radius:10px; background-color:white; padding:5px; color:black; float:right" align="right"><span id="maskClose">Thoát</span></div>
			<h3>Đăng ký miễn phí lớp học</h3>
			<h2>BỨT PHÁ MÔN TOÁN TRƯỜNG HN AMS</h2>
			<center>
				<form method="post" action="<?php echo base_url();?>index.php/dangky/dangkymoi">
					<table>
						<tr>
							<td style="width:150px">Họ tên</td>
							<td><input name="hoten" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Trường học</td>
							<td><input name="truonghoc" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Lớp</td>
							<td><input name="lop" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Phụ huynh</td>
							<td><input name="phuhuynh" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td>Điện thoại liên lạc</td>
							<td><input name="dienthoai" type="text"/></td>
						</tr>
						<tr><td style="height:10px"></td></tr>
						<tr>
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Đăng ký" name="submit"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
	    <div id="banner-left">
	    	<ul>
		    	<li>
		    		<a href="<?php echo base_url();?>index.php/welcome/detail/2" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/teacher_icon.png"/><span>Thầy Phan Quang Điệp</span></a>
		    	</li>
		    	<li><hr/></li>
		    	<li>
		    		<a href="<?php echo base_url();?>index.php/camnhan" style="vertical-align:50%"><img src="<?php echo base_url();?>assets/unix/images/comment-icon.png"/><span>Cảm nhận</span></a>
		    	</li>	    	
	    	</ul>
	    </div>
	    <?php 
		 //   print displayStatus();
			print (isset($content)) ? $content : NULL; 
			if( isset($page))
			{
				if( isset($module))
				{
					$this->load->view($module.'/'.$page);
				} 
				else 
				{
					$this->load->view($page);
				}
			}
		?>
		<div id="banner-right">
	    	<ul>
	    		<li><h3>Bứt phá môn Toán trường HN Ams</h3></li>
	    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
	    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
	    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
	    		<li><img src="<?php echo base_url();?>assets/unix/images/ticked-icon.png"/><hr/></li>
	    		<li><h4 id="register">Đăng ký (Free)</h4></li>
	    	</ul>
	    </div>
	    
	    
		<?php $this->load->view('shop/footer.php')?>											
	</body>
</html>
