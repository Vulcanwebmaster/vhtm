<script type="text/javascript">
	$(document).ready(function(){
		$('#about-us').addClass('current');
		$('.image-gallery-slider ul').css('height','120px');
	});
</script>
<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title">About Us</h1>

		<hr />

		<h2 class="page-description">We are regarded as industry leaders in digital strategy and solutions, focused solely on delivering great user experiences.</h2>
		
	</header><!-- end .page-header -->
	
	<div style="text-align:right">
		<style type="text/css">
			.newController{cursor:pointer}
		</style>
		<ul>
			<li style="display:inline; position: relative;">
				<a class="newController">Pre</a>
			</li>
			<li style="display:inline">
				<a class="newController">Nxt</a>
			</li>
		</ul>
	</div>
	<hr style="width:2px;color: ">
	<div style="width:910px; overflow-x: hidden">
	<ul id="newslide" style=" width:-moz-max-content ;list-style-type: none ">	
		<?php foreach ($list as $row):?>
			<li style="float:left; width:260px;text-align: justify;padding-right: 10px"><h4><strong><?php echo $row->title?></strong></h4><p><?php echo $row->content?></p></li>
		<?php endforeach; ?>
	</ul>
	</div>
</section><!-- end #content -->

<script type="text/javascript">
	$(document).ready(function(){
		var amount=$('#newslide li').length;
		var width1=amount*300;
		var width2=width1+"px";
		$('#newslide').css('width',width2);

		//xu ly newController
		$('.newController:last').click(function(){
			var max=parseInt($('#newslide').css('width'));
			
			var left=parseInt($('#newslide').css('margin-left'));
			if (Math.abs(left)<Math.abs(max)-910)
			{
				var newleft=left-910;
				$('#newslide').animate({marginLeft:newleft});
			}
		});
		$('.newController:first').click(function(){
			var left=parseInt($('#newslide').css('margin-left'));

			if (left<0)
			{
				var newleft=left+910;
				$('#newslide').animate({marginLeft:newleft});
			}
		});
	});
</script>