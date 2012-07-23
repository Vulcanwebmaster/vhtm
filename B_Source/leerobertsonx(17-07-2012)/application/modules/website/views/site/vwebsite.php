<script type="text/javascript">
	$(document).ready(function(){
		$('#website').addClass('current');
	});
</script>
<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php echo $maintitle;?></h1>
		
	</header><!-- end .page-header -->

<?php foreach ($Ctg1 as $ctg):?>
	<div class="one-fourth">
	<h4><?php echo $ctg->name?></h4>
	<?php foreach ($LstArt1 as $art):?>
		<span class="acc-trigger">
			<a href="#"><?php echo $art->title?></a>
		</span>
		<div class="acc-container">
			<div class="content">
				<?php 
					echo substr($art->content,0,50).'...';
				?>
				<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $art->alias;?>">More</a>
			</div>
		</div><!-- end .acc-container -->
	<?php endforeach;?>	
	</div><!-- end .one-fourth -->

<?php foreach ($Ctg2 as $ctg):?>
	<div class="one-fourth">
		<h4><?php echo $ctg->name?></h4>
		<ul class="tabs-nav">
		<?php for ($i = 1; $i <= $NumLstArt2; $i++):?>
			<?php if ($i == 1){?>
			<li class="active">
				<a href="#tab<?php echo $i?>"><?php echo $i?></a>
			</li>
			<?php }else{?>
			<li>
				<a href="#tab<?php echo $i?>"><?php echo $i?></a>
			</li>
			<?php }?>
		<?php endfor;?>
		</ul><!-- end .tabs-nav -->

		<div class="tabs-container">
			<?php
			$i  = 1; 
			foreach ($LstArt2 as $art):?>
				<div class="tab-content" id="tab<?php echo $i?>">
				<?php echo substr($art->content,0,300);?>
				<a class="more" href="<?php echo base_url();?>website/detail/<?php echo $art->alias?>">More...</a>
			</div><!-- end #tab1 -->
			<?php
			$i = $i + 1; 
			endforeach;?>
		</div><!-- end .tabs-container -->
		
	</div><!-- end .one-fourth -->
<?php endforeach;?>
<?php foreach ($Ctg3 as $ctg):?>
	<div class="one-fourth">

		<h4><?php echo $ctg->name;?></h4>
		<?php
		$i = 1; 
		foreach ($LstArt3 as $art):?>
		<?php if ($i == 1){?>
		<p class="error">
			<?php 
				echo '<a href="'.base_url().'website/detail/'.$art->alias.'">'.$art->title.'</a>';
			?>
		</p>
		<?php }else if ($i == 2){?>
		<p class="success">
			<?php 
				echo '<a href="'.base_url().'website/detail/'.$art->alias.'">'.$art->title.'</a>';
			?>
		</p>
		<?php }else if ($i == 3){?>
		<p class="info">
			<?php 
				echo '<a href="'.base_url().'website/detail/'.$art->alias.'">'.$art->title.'</a>';
			?>
		</p>
		<?php }else if ($i == 4){?>
		<p class="notice">
			<?php 
				echo '<a href="'.base_url().'website/detail/'.$art->alias.'">'.$art->title.'</a>';
			?>
		</p>		
		<?php }else{?>
		<p class="info">
			<?php 
				echo '<a href="'.base_url().'website/detail/'.$art->alias.'">'.$art->title.'</a>';
			?>
		</p>
		<?php }?>
		<?php
		$i = $i+1; 
		endforeach;?>

	</div><!-- end .one-fourth -->
<?php endforeach;?>	
	<div class="one-fourth last">

		<h4>Pricing Tables</h4>

		<div class="infobox">

			<h3>Click button to show Pricing Tables &darr;</h3>

			<p><a class="button" href="<?php echo base_url();?>website/pricingTable">Pricing Tables</a></p>

		</div><!-- end .infobox -->
		
	</div><!-- end .one-fourth.last -->

	<div class="clear"></div>

	<hr />
<?php foreach ($LstArt4 as $art):?>	
	<div>
		<?php 
			echo '<h3>'.$art->title.'</h3>';
			echo $art->content;
		?>
	</div>
<?php endforeach;?>	
<?php endforeach;?>
</section><!-- end #content -->