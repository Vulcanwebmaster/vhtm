<script type="text/javascript">
	$(document).ready(function(){
		$('#portfolio').addClass('current');
	});
</script>
<section id="content" class="container clearfix">

	<header class="page-header">
	
		<h1 class="page-title">Things we have done</h1>

		<ul id="portfolio-items-filter">

			<li>Showing</li>
			<li><a data-categories="*" >All</a></li>
			<?php foreach ($categories as $ctg):?>
			<li><a data-categories="<?php echo $ctg->name?>" style="text-transform:capitalize;"><?php echo $ctg->name?></a></li>
			<?php endforeach;?>

		</ul><!-- end #portfolio-items-filter -->
		
	</header><!-- end .page-header -->

	<section id="portfolio-items" class="clearfix">

<?php foreach ($portfolios as $rw):?>		
		<article class="one-third" data-categories="<?php echo $this->Mportfolio->getCategoryByPortfolio($rw->id)?>">

			<a href="<?php
			if ($rw->type == 1) 
				echo base_url().$rw->url;
			if ($rw->type == 2)
				echo $rw->url;
			?>" class="<?php echo $this->Mportfolio->getTypeByPortfolio($rw->type)?>" title="<?php echo $rw->name?>">
				<img src="<?php echo base_url();?><?php echo $rw->image;?>" alt="">
			</a>

			<a href="single-project.html" class="project-meta">
				<h5 class="title"><?php echo $rw->title?></h5>
				<span class="categories"><?php echo $this->Mportfolio->getCategoryByPortfolio($rw->id)?></span>
			</a>
			
		</article><!-- end .one-third (Altered) -->
<?php endforeach;?>
	</section><!-- end #portfolio-items -->
	
</section><!-- end #content -->