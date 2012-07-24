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
		<?php $item=$this->Mwebsite->getInfoByAlias('small-business-design');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
		<?php $item=$this->Mwebsite->getInfoByAlias('flash-design');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
		<?php $item=$this->Mwebsite->getInfoByAlias('html-design');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
	</div>
</section>