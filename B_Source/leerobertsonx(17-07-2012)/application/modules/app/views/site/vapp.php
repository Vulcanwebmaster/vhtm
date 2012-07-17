<script type="text/javascript">
	$(document).ready(function(){
		$('#application').addClass('current');
	});
</script>
<section id="content" class="container clearfix">
	<header class="page-header">
		<h1 class="page-title"><?php if (isset($maintitle)) echo $maintitle;?></h1>
	</header><!-- end .page-header -->
	<div>	
			<?php foreach($vcontent as $rows):?>
				<?php echo '<h2 style="text-transform:uppercase">'.$rows->title.'</h2>';
					echo $rows->shortcontent.'...';
				?>
				<a href="<?php echo base_url();?>app/detail/<?php echo $rows->id.'/'.$rows->alias?>" data-description="">
					<i>see more</i>
					</a>
				<hr>
				<?php 
				endforeach;
			
		
		
		?>
	</div>

	
</section>