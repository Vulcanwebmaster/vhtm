<link rel="stylesheet" href="<?php echo base_url()?>assets/sieuthixehoi/css/content-slider.css" type="text/css" />
<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.menucardslider.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.contentslider.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.tinytips.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo base_url()?>assets/sieuthixehoi/js/jquery.fancybox.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('a.tTip').tinyTips('title');
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$("a#fancy").fancybox();
	});
</script>
<?php
?>

<!-- BEGIN .full-width-content-wrapper -->
<div class="full-width-content-wrapper">	
	<!-- BEGIN .main-content -->
	<div class="main-content">
		<!-- BEGIN .main-title -->
		<div class="main-title">
			<span><b>Danh sách sản phẩm:</b></span>
		<!-- END .main-title -->
		</div>
		<div class="filter">
		</div>
			<table class="menu-card">
				<tr>
					<td class="menu-card-content-wrapper">
						<!-- BEGIN .content-wrapper -->
						<div class="content-wrapper">
							<!-- BEGIN .card-container -->
							<div id="card-container" activepage="1">
								
								<!-- BEGIN .card-slider -->
								<div class="content" id="card-slider">
									
									<!-- BEGIN .card-page -->
									<div class="card-page" id="cardpageid-1">
										<!-- BEGIN .left-side -->
										<div class="left-side">
											<h3></h3>
											<?php foreach ($items as $value): ?>
												<table class="item">
													<tr>
														<td class="image"><a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $value->id."-".$value->alias ?>">
															<!--<img src="<?php echo base_url();?>assets/sieuthixehoi/images/image-108.jpg" alt="" width="54" height="54"  />-->
															<?php echo $value->image ?>
														</a></td>
														<td class="text">
															<p class="title"><a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $value->id."-".$value->alias ?>"><?php echo $value->namev?></a></p>
															<p class="description"><?php echo word_limiter($value->mota, 20)?></p>
														</td>
													</tr>
												</table>												
											<?php endforeach ?>
										
										</div>	
																
										<!-- END .left-side -->
										
										<div class="clear"></div>
									</div>
									<!-- END .card-page -->
								</div>
								
								<!-- END .card-slider -->
							</div>
							<!-- END .card-container -->
						</div>
						<!-- END .content-wrapper -->				
					</td>
				</tr>
				<div><?php echo $this->pagination->create_links();?></div>
			</table>
		</div>
</div>
<!--
<script>
	$(document).ready(function() {
	  $('#m-sanpham').addClass('menu-visited');
	});
</script>

<div id="ja-mainbody" class="clearfix">
			<div class="stuff">
				<?php
					foreach($items as $item)
					{
						?>
							<div align="center" class="trangchuhehe" >
							
								<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>" class="name">
								
								<?php echo $item->image; ?>
								<?php echo $item->namev; ?>
								<?php echo $item->price; ?>
								</a>
								<br>
							</div>
							
						<?php
					}
				?>
				
			</div>

	</div>
-->