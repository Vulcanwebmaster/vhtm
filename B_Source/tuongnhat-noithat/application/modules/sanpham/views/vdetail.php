<?php
	$newModel=new CI_Model();
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#button_submit").click(function(){
			$("#addbasket").load("<?php echo base_url();?>sanpham/themgiohang/<?php echo $product->product_id?>");
		});
	});
</script>
<style type="text/css">
	#background-image{display:none}
</style>
        <!--------------beginbody----------->
<div class="principal"></div>
 <div class="line">  
 	<div class="unit size1of1">  							
		<div class="line article_wrap" id="article_wrap" style="z-index:997;">
			<!-- Imagen -->							
			<div class="unit size1of2">
				<h2><?php if($_SESSION['lang'] == 'en') echo $product->product_name_e;
				else echo $product->product_name_v;?></h2>
				<div class="article_image">

					<div class="main_ph">
						<div class="unit size1of1">
							<div class="viewBig">
								<div class="zoom-small-image viewImgBig1"> 
									<a href='<?php 
												$preg = preg_match_all('#/tuongnhat.*jpg#',$product->product_image,$match);
												echo $match[0][0]; 
											 ?>' 
											 target="_blank"
										class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">								   
									<div class="anhbody"><?php echo $product->product_image; ?></div>
									</a>
								</div>
								<div class="zoom-small-image viewImgBig2"> 
									<a href='<?php 
												$preg = preg_match_all('#/tuongnhat.*jpg#',$product->product_image2,$match);
												echo $match[0][0]; 
											 ?>' 
										class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4" target="_blank">									   
									<?php if(isset($product->product_image2)){ ?>
									<div class="anhbody"><?php echo $product->product_image2; ?></div>
									<?php } ?>
									</a>
								</div>
								<!--<img itemprop="image" src="<?php echo base_url()?>assets/tuongnhatp2/images/images/5958000700_1_1_2.jpg" class="viewImgBig1 cloudzoom" width="350" height="350"/>
								<img itemprop="image" src="<?php echo base_url()?>assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" class="viewImgBig2 cloudzoom" width="350" height="350"/>
								-->
								<div id="zoom_img_art" style="z-index: 1; "><a href="#" id="imageZoom" rel="lightbox-gallery"></a><a href="#" id="imageZoom" rel="lightbox-gallery" style="z-index: 1; "></a></div>
							</div>
						</div> 												
					</div>
					<!-- BEGIN ItxMiniAuxImagesCachedBundle.jspf -->

                <div class="line seco_ph">
                    <div class="unit size1of1">
                        <div class="viewSmall">
                           <ul class="listH productImage"> 
								<?php if ($product->product_image != '')
								{?>
								<li class="auxImageLi selected prodAuxImg_0">
									<a href="">
										<?php echo $product->product_image; ?>
									</a>                                                                                                  
								</li>
								<?php }?>
								
								<?php if ($product->product_image2 != '')
								{?>
								<li class="auxImageLi selected prodAuxImg_1">
									<?php echo $product->product_image2; ?>                                                   
								</li>
								<?php }?>                                              
							</ul>
                        </div>			
                    </div>
                </div>
               
<!-- END ItxMiniAuxImagesCachedBundle.jspf -->	
						<script>
						$(document).ready(function(){
							
							$('#sharedown').hide();
							$('#shareButton').mouseenter(function(){
								$('#sharedown').show('slow');
								});
							$('#shareButton').mouseleave(function(){
								$('#sharedown').hide('slow');
								});
						});
						</script>		
				</div>
			</div>
			
			<div class="unit size1of2 lastUnit">
				<div class="article_page">
					<p class="article_title" style="padding-bottom:0"><?php echo $this->lang->line('splienquan');?></p>
				 	<div class="article_description"> 			 	</div>			
					<div id="glossary_wrap" style="position: absolute; ">
						<div class="title">Glossary</div>
						<div id="glossary_close"></div>
						<div id="glossary_container">							    
						</div>
					</div>
					<div class="article_drops" style="z-index:999;">
						<div id="article_drops_bg" class="article_drops_bg"></div>
              			<ul class="listH article_drops">
	                			<li>
	                				<a id="article_drop_envio" href="#">Gian hàng/ thanh toán</a>
			                 		<div id="envio_wrap" class="envio_wrap" style="display: none; z-index:2000;">
			                  			<div class="title">Delivery</div>
			                   			 <div class="container">
				                    		<div class="section">
<p><span class="price">FREE SHIPPING DURING OCTOBER</span></p>
</div>
			                    		</div>
			                    		<div class="title">Returns</div>
					                    <div class="container" style="white-space:normal !important;">
					                    	<div class="section">All items can be returned within one month after the delivery date to our Distribution Centre.  <strong>Returns are always free of charge</strong>.
<br><br>
To arrange a return, use the contact form or call our Customer Service Department at 1- 877-550-1107.
</div>
					                  	</div>
			                  		</div>
	                  			</li>
                  			
		                    
                		</ul>
              		</div>
				
				<div class="article_bundle" style="z-index:997;">
					    
								
						<div class="header">&nbsp;</div>
						<form method="post" class="itemAddId ignoreValidation" id="itemAddId" name="itemAdd" action="">	
							<!-- mostramos las caracteristicas de cada uno de los productos  -->
							<?php foreach ($relates as $item)
							{?>
								<div class="item" style="z-index:998">									
									<a href="<?php echo base_url();?>sanpham/chitiet/-<?php echo $item->product_id;?>-<?php echo $item->alias;?>">
										<?php echo $item->product_image ?>	
									</a>
									<input type="hidden" class="pAux" value="">
									<input type="hidden" class="pAuxZoom" value="">
									<input type="hidden" class="pAuxMZoom" value="">   									
									<h3 class="article_title">
										<a href="<?php echo base_url();?>sanpham/chitiet/-<?php echo $item->product_id;?>-<?php echo $item->alias;?>"><?php
										if ($_SESSION['lang'] == 'en'){
											echo $product->product_name_e;
										}else{
											echo $item->product_name_v;
										}?></a></h3>											
									<div class="article_desc_fields" style="z-index:998">
							        	<ul>								        	
								          	<li><span class="field_name">
													<?php echo $this->lang->line('ma')?>:
												</span>
												<span>&nbsp;</span>
												<span>
													<?php echo $item->product_ma ?>	
												</span>	
											</li>
							          </ul>
							       </div>
                                    <div class="dropdownWrapper article_drops">
									   		<div class="article_drops_bg "></div>
											<ul class="listH">
												<li>
													<a href="#content"><?php echo $this->lang->line('thongtinsp');?></a>
													<div class="dropdownClass cuidados_wrap">
															
															<div class="title"><?php echo $this->lang->line('detail-mota');?></div>
										                    <div class="container article_description" style="white-space: normal !important;">
										                    	<?php echo $item->mota ?>	
										                    </div>
									                    
									                    	<div class="title"><?php echo $this->lang->line('detail-thanhphan');?></div>
															
																<div class="container">
																<?php echo $item->thanhphan ?>	
																</div>
															<div class="title"><?php echo $this->lang->line('detail-baoquan');?></div>
															<div class="container">
									                 			<ul>
																	<li>
																		<?php echo $item->care ?>	
																	</li>
																</ul>
															</div>	
														
													</div>
												</li>
											</ul>
										</div>
									<!-- Dentro del formulario  -->
									<div class="formProduct">
										<!-- Tabla de precios  -->
										<div class="article_order">
							           		<table>
							               		<tbody>
															<tr class="rowSize_7000000000000000563">
										                  		<td class="selecsize selecsize_7000000000000000563_1">
										                  			<ul class="selectSi">
										                  				<li class="selected auxSelecLi" id="selecsize_7000000000000000563_1">
																			<input type="radio" name="selSize1" class="offleft" value="7000000000000000563_1">
																			<span>
																				<?php echo $item->size ?>	
																			</span> 
																			
																		</li>
																	</ul>
																</td>		
																<td class="price price_7000000000000000563">
																	
																			<p class="price  pPrice_7000000000000000563" id="pPrice"><?php echo $item->product_price;?> VNĐ</p>	
																</td>
									                 		</tr>
									                 		<input type="hidden" id="quantity_7000000000000000563_1" class="quantity_7000000000000000563_1">
									                 		<input type="hidden" id="f_itemId_7000000000000000563_1" class="f_itemId_7000000000000000563_1">
									                 		<input type="hidden" id="cantidadDisp_7000000000000000563_1" class="cantidadDisp_7000000000000000563_1">
									                 		
							               		</tbody>
											</table>							             
										</div>
										
										
									</div> <!-- fin div fomulario -->
								</div> 
								<?php }?>
								<!-- fin div item --><!-- mostramos las caracteristicas de cada uno de los productos  -->
								<div class="line">
									<div class="actions">
										<table>
											<tbody>
												<tr>
													<td width="50%">
															<a id="button_submit" class="button butBlack butAddCart">
																<span><?php echo $this->lang->line('themgiohang');?></span>
															</a>
													</td>
													<td width="50%">
															<a id="buyButton" href="<?php echo base_url()?>sanpham/xemgiohang" class="button butBlack buyButton">
																<span><?php echo $this->lang->line('xemgiohang');?></span>
															</a>
													</td>
												</tr>								
											</tbody>
										</table>
										<div id="addbasket"></div>			
									</div>
								</div>
							
						</form>
					</div> 
				</div>			
			</div>  
		</div>  																												
	</div>
</div>
		
<!-- End - JSP File Name:  ItxMerchandisingAssociationsDisplay.jsp --><!-- Puedes ponerlo con .... -->
	<!-- Últimos productos vistos: -->
	
	<!-- End - JSP File Name:  ItxCachedBundleProductView.jsp -->
<!-------------end body--------------->		