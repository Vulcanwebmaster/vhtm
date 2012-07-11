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
		<?php if (isset($vcontent1)) 
		{
			echo '<h2 style="text-transform:uppercase">'.$vcontent1->title.'</h2>';
			echo $vcontent1->content;
		}
			if (isset($vcontent2)) 
		{
			echo '<h2 style="text-transform:uppercase">'.$vcontent2->title.'</h2>';
			echo $vcontent2->content;
		}
		?>
	</div>
</section>