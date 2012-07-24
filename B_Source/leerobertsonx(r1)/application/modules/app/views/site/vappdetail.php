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
		
		
			<?php foreach($list as $rows):?>
			
				<?php echo '<h2 style="text-transform:uppercase">'.$rows->title.'</h2>';
					echo $rows->content;
				
				
				
				endforeach;
			
		
		
		?>
	</div>

	
</section>
