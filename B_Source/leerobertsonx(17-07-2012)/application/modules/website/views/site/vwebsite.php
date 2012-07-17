<script type="text/javascript">
	$(document).ready(function(){
		$('#website').addClass('current');
	});
</script>
<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php echo $maintitle;?></h1>
		
	</header><!-- end .page-header -->
	
	<div class="one-fourth">

		<h4>Web design</h4>

		<span class="acc-trigger">
			<a href="#">Small Business Design</a>
		</span>
		<div class="acc-container">
			<div class="content">
				<?php $item=$this->Mwebsite->getInfoByAlias('small-business-design');
					echo substr($item->content,0,50).'...';
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/small-business-design">More</a>
			</div>
		</div><!-- end .acc-container -->

		<span class="acc-trigger">
			<a href="#">Flash Design</a>
		</span>
		<div class="acc-container">
			<div class="content">
				<?php $item=$this->Mwebsite->getInfoByAlias('flash-design');
					echo substr($item->content,0,50).'...';
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/flash-design">More</a>
			</div>
		</div><!-- end .acc-container -->
		
		<span class="acc-trigger">
			<a href="#">HTML Design</a>
		</span>
		<div class="acc-container">
			<div class="content">
				<?php $item=$this->Mwebsite->getInfoByAlias('html-design');
					echo substr($item->content,0,50).'...';
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/html-design">More</a>
			</div>
		</div><!-- end .acc-container -->
	</div><!-- end .one-fourth -->
	
	<div class="one-fourth">

		<h4>SEO</h4>

		<ul class="tabs-nav">

			<li class="active">
				<a href="#tab1">1</a>
			</li>

			<li>
				<a href="#tab2">2</a>
			</li>

		</ul><!-- end .tabs-nav -->

		<div class="tabs-container">

			<div class="tab-content" id="tab1">
				<?php $item=$this->Mwebsite->getInfoByAlias('seo-1');
					echo substr($item->content,0,300);
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias?>">More...</a>
			</div><!-- end #tab1 -->

			<div class="tab-content" id="tab2">
				<?php $item=$this->Mwebsite->getInfoByAlias('seo-2');
					echo substr($item->content,0,300);
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $item->alias?>">More...</a>
			</div><!-- end #tab2 -->
		</div><!-- end .tabs-container -->
		
	</div><!-- end .one-fourth -->
	
	<div class="one-fourth">

		<h4>Web developement</h4>

		<p class="error">
			<?php $item=$this->Mwebsite->getInfoByAlias('rich-internet-applications');
				echo '<a href="'.base_url().'website/detail/'.$item->alias.'">'.$item->title.'</a>';
			?>
		</p>
		
		<p class="success">
			<?php $item=$this->Mwebsite->getInfoByAlias('website-redesign');
				echo '<a href="'.base_url().'website/detail/'.$item->alias.'">'.$item->title.'</a>';
			?>
		</p>

		<p class="info">
			<?php $item=$this->Mwebsite->getInfoByAlias('cms-solutions');
				echo '<a href="'.base_url().'website/detail/'.$item->alias.'">'.$item->title.'</a>';
			?>
		</p>

		<p class="notice">
			<?php $item=$this->Mwebsite->getInfoByAlias('dynamic-websites');
				echo '<a href="'.base_url().'website/detail/'.$item->alias.'">'.$item->title.'</a>';
			?>
		</p>
		
	</div><!-- end .one-fourth -->
	
	<div class="one-fourth last">

		<h4>Pricing Tables</h4>

		<div class="infobox">

			<h3>Click button to show Pricing Tables &darr;</h3>

			<p><a class="button" href="<?php echo base_url();?>website/pricingTable">Pricing Tables</a></p>

		</div><!-- end .infobox -->
		
	</div><!-- end .one-fourth.last -->

	<div class="clear"></div>

	<hr />
	
	<div>
		<?php $item=$this->Mwebsite->getInfoByAlias('lrx-dolsh-web-design-company');
			echo '<h3>'.$item->title.'</h3>';
			echo $item->content;
		?>
		<?php $item=$this->Mwebsite->getInfoByAlias('lrx-web-design-company-offers');
			echo '<h3>'.$item->title.'</h3>';
			echo $item->content;
		?>
	</div>	
</section><!-- end #content -->