<script type="text/javascript">
	$(document).ready(function(){
		$('#website').addClass('current');
	});
</script>
<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php echo $maintitle;?></h1>
		
	</header><!-- end .page-header -->
	
	<div>
		<?php echo $detail->content;?>
	</div>
</section>