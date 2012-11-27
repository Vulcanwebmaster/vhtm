<?php
	$newModel=new CI_Model();
?>
<!-----<?php if ($lang=='vn') echo $product->technical_infov; else echo $product->technical_infove;?>------>
<div id="ja-mainbody" class="clearfix">

        	<!-- FEATURE PRODUCTS -->
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
		
		
      <!--------------end center----------------------->
	</div>
	  

			
  
