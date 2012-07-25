<script type="text/javascript">
	$(document).ready(function(){
		$('#website').addClass('current');
		$('h3').css('text-transform','lowercase');
	});
</script>
<section id="content" class="container clearfix">
	<header class="page-header">
		<h1 class="page-title"><?php echo $maintitle;?></h1>
	</header><!-- end .page-header -->
	<?php foreach ($LstArt as $rw):?>
	<div>
		<?php 
			echo '<h2>'.$rw->title.'</h2>';
			echo substr($rw->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $rw->alias;?>">More</a>
	</div>
	<?php endforeach;?>
</section>