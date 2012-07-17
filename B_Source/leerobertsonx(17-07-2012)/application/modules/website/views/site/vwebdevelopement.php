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
	<div>
		<?php $item=$this->Mwebsite->getInfoByAlias('rich-internet-applications');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
		
		<?php $item=$this->Mwebsite->getInfoByAlias('website-redesign');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
		
		<?php $item=$this->Mwebsite->getInfoByAlias('cms-solutions');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
		
		<?php $item=$this->Mwebsite->getInfoByAlias('dynamic-websites');
			echo '<h2>'.$item->title.'</h2>';
			echo substr($item->content,0,800).'...';
		?>
		<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias;?>">More</a>
	</div>
</section>