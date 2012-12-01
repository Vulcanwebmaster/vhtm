<?php
	$newModel=new CI_Model();
?>


<!-----<?php if ($lang=='vn') echo $product->technical_infov; else echo $product->technical_infove;?>------>
<!--
<div id="ja-mainbody" class="clearfix">
-->
        	<!-- FEATURE PRODUCTS -->
<!--
        				<div id="ja-content" class="clearfix">
						<div id="vmMainPage">
							<div class="buttons_heading"></div>
								<br style="clear:both;">
							<table border="0" align="center" style="width: 100%;">
								
								<tr>
									<td rowspan="2" align="center" valign="top" width="160">
										<div class="image_detail">
											<a href="#">
											<?php echo $product->image ?>
										</div><br><br>        
									</td>
									<td valign="top" width="280" style="vertical-align: top">
										<div style="text-align: center;">
										<span style="font-style: italic;"></span>
											<div class="vmCartContainer">					
												<form action="" method="post" name="addtocart" id="addtocart_509e748f34f52" class="addtocart_form" onsubmit="handleAddToCart( this.id );return false;">
													<div class="vmCartDetails">	
														<div class="vmCartChild vmRowTwo">
															<input type="hidden" name="product_id" value="128">
															<input type="hidden" name="prod_id[]" value="128">
															<div align="center" class="vmCartAttributes">
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Tên Sản Phẩm </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 53px;">: <?php echo $product->namev ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Hãng sản xuất </label>
																		<label style="color:#e04139;font-weight:bold;">: <?php echo $product->hangsx ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Mẫu</label>
																		<label style="color:#e04139;font-weight:bold;  margin-left: 30px;">: <?php echo $product->alias ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Giá Sản Phẩm </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 30px;">: <?php echo $product->price ?></label>
																</div>
																<div class="vmAttribChildDetail">
																		<label style="color:#000000;font-weight:bold;">Chi Tiết </label>
																		<label style="color:#e04139;font-weight:bold; margin-left: 41px;">: <?php echo $product->mota ?></label>
																</div>
															</div>
														</div>	 
													</div>
												</form>
											</div>
											<span style="font-style: italic;"></span>
										</div>
									</td>
								
								</tr>        
								<tr>
							</tr>  
						</table>
						
	<div id="relate_list">
		<div id="items">
			<?php foreach ($relates as $item)
			{?>
				<div class="item12">
					<div class="itemimage">
						<a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>">
						
						</a><br />								
					</div>
		            <div class="itemh5"><?php echo $item->namev;?></div>
				</div>
			<?php }?>
			<br class="clear"/>
		</div>
	</div>
					</div>
				</div>
		
		
      
	</div>
<!--------------end center----------------------->
	  
<!-- BEGIN .main-content-wrapper -->
<div class="main-content-wrapper">
	<!-- BEGIN .main-content -->
	<div class="main-content">
		<!-- BEGIN .left-side -->
		<div class="left-side">
			
			<!-- BEGIN .main-title -->
			<div class="main-title">
				<span><b>Chi tiết</b></span>
				<a href="#">Trở về trang chủ</a>
			</div>
			<!-- END .main-title -->
			
			<!-- BEGIN .post -->
			<div class="post">
				<h3><a href="#"><?php echo $product->namev ?></a></h3>
				<div class="date">
				</div>
				<?php echo $product->image ?>
				<br>
				<?php echo $product->mota ?>
				<br>
				<div class="post-menu-card">
					<div class="photos">
						<h3>More photos</h3>
						<a href="#"><img src="assets/sieuthixehoi/images/image-140.jpg" alt="" width="393" height="260" id="largeimg" /></a>
						<div class="thumbs">
							<a href="assets/sieuthixehoi/images/image-140.jpg" class="thumbnail"><img src="assets/sieuthixehoi/images/image-145.jpg" alt="" width="60" height="60" /></a>
							<a href="assets/sieuthixehoi/images/image-142.jpg" class="thumbnail"><img src="assets/sieuthixehoi/images/image-147.jpg" alt="" width="60" height="60" /></a>
							<a href="assets/sieuthixehoi/images/image-149.jpg" class="thumbnail"><img src="assets/sieuthixehoi/images/image-148.jpg" alt="" width="60" height="60" /></a>
							<a href="assets/sieuthixehoi/images/image-151.jpg" class="thumbnail"><img src="assets/sieuthixehoi/images/image-150.jpg" alt="" width="60" height="60" /></a>
							<a href="assets/sieuthixehoi/images/image-153.jpg" class="thumbnail"><img src="assets/sieuthixehoi/images/image-152.jpg" alt="" width="60" height="60" /></a>
						</div>
					</div>
					<div class="specification">
						<h3>Specification</h3>
						<div>
							<span class="price"><?php echo $product->price ?> VND</span>
							<ul>
								<li>Tên Sản Phẩm: <b><?php echo $product->namev ?></b></li>
								<li>Hãng sản xuất: <b><?php echo $product->hangsx ?></b></li>
								<li>Mẫu: <b></b></li>
							</ul>
						</div>
						<div class="bottom">&nbsp;</div>
					</div>
				</div>																				
			</div>			
						
		</div>
		<!-- END .left-side -->
		
		<!-- BEGIN .sidebar -->
		<div class="sidebar">
			<!-- BEGIN .latest-activity -->
			<div class="events sidebar-item">			
					
					<!-- BEGIN .content -->
					<div class="content">
						<div class="main-title">
							<span><b>Sản phẩm liên quan</b></span>
						</div>						
						<?php foreach ($relates as $key => $item): ?>
						<!-- BEGIN .item -->
						<div class="item">
							<h5><a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->category_id."-".$item->id."-".$item->alias ?>"><?php echo $item->namev;?></a></h5>
						<!-- END .item -->
						</div>						
						<?php endforeach ?>					

						
					</div>
				<!-- END .content -->
				</div>
			<!-- END .latest-activity -->
			</div>									
			</div>			
		</div>		
	</div>
	<!-- END .main-content -->
</div>
			
  
