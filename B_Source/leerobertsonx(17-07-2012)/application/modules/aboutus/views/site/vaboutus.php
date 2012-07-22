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
		<ul class="post-carousel">
		<?php foreach ($list as $row):?>	
			<li>
				<h5><?php echo $row->title?></h5>
				<div>
					<?php echo $row->content?>
				</div>
			<li>
		<?php endforeach; ?>
	</ul>
</section><!-- end #content -->