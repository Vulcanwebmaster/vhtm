<?php
	$newModel=new CI_Model();
?>
<style type="text/css">
	#background-image{display:none}
</style>
        <!--------------beginbody----------->
        <div class="body">
	<div class="line">
		<div class="line">
        	<div id="pagination" class="unit size1of2">
				<div class="back back_cat"><a href="#">&nbsp;</a></div>
				<div class="passProduct">
					<a class="prev previous disabled" href="#" data-href-template="#">&nbsp;</a>
					<a class="next " href="#" data-href-template="#">&nbsp;</a>
				</div>
			</div>
            <div class="unit size1of2">&nbsp;
            </div>
        </div>
	</div>		
	<div class="principal"></div>
 <div class="line">  
 	<div class="unit size1of1">  							
		<div class="line article_wrap" id="article_wrap" style="z-index:997;">
			<!-- Imagen -->							
			<div class="unit size1of2">	
				<div class="article_image">

					<div class="main_ph">
						<div class="unit size1of1">
							<div class="viewBig">
								<div class="zoom-small-image viewImgBig1"> 
									<a href='<?php 
												$preg = preg_match_all('#/tuongnhat.*jpg#',$product->product_image,$match);
												echo $match[0][0]; 
											 ?>' 
										class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">								   
									<div class="anhbody"><?php echo $product->product_image; ?></div>
									</a>
								</div>
								<!--<div class="zoom-small-image viewImgBig1"> 
									<a href='<?php echo base_url()?>assets\tuongnhatp2\images\images<?php echo $product->product_image ?>' class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">								   
										<?php echo $product->product_image ?>
									</a>
								</div>
								-->
								<div class="zoom-small-image viewImgBig2"> 
									<a href='<?php echo base_url()?>assets/tuongnhatp2/images/images/5958000700_2_1_3.jpg' class = 'cloud-zoom'  id='zoom1' rel="adjustX: 10, adjustY:-4">								   
									<img src="<?php echo base_url()?>assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" title="" alt='' width="350" height="350"/></a>
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
								<li class="auxImageLi selected prodAuxImg_0">
									<a href="">
										<?php echo $product->product_image; ?>
									</a>                                                                                                  
								</li>
								<li class="auxImageLi selected prodAuxImg_1">
									<?php echo $product->product_image2; ?>                                                   
								</li>                                                    
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
								})
							$('#shareButton').mouseleave(function(){
								$('#sharedown').hide('slow');
								})	
						})
						</script>		
						<div class="social" style="top:230px;">							
							<input id="socialShare" type="hidden" value="">
							<a id="shareButton" class="share_btn shareButton" href="#">Chia sẻ</a>
							<ul class="listH socialLinks" id="sharedown">
								<li><a class="fb" title="Facebook"><span class="offleft">Facebook</span></a></li>
								<li><a class="tw" title="Twitter"><span class="offleft">Twitter</span></a></li>
								<li><a class="mail gaPage" data-ga-page-event="click" data-ga-page-logic="/Enviar_a_Amigo/Formulario" href="#" title="E-Mail"><span class="offleft">E-Mail</span></a></li>
								<li id="idPrintButton"><a class="print" href="#print" title="Print"><span class="offleft">Print</span></a></li>
								<li>
									<div style="height: 15px; width: 24px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial; " id="___plusone_0"></div>
							
								</li>
							</ul>									
						</div>
							
				</div>
			</div>
			
			<div class="unit size1of2 lastUnit">
				<div class="article_page">
					<h2 class="article_title">Rines Pillow </h2>
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
										<!--<img onclick="" src="<?php echo base_url()?>assets/tuongnhatp2/images/images/5958008700_1_1_5.jpg">-->									
									<?php echo $item->product_image ?>	
									
									<input type="hidden" class="pAux" value="">
									<input type="hidden" class="pAuxZoom" value="">
									<input type="hidden" class="pAuxMZoom" value="">   									
									<h3 class="article_title"><?php echo $item->product_name ?></h3>											
									<div class="article_desc_fields" style="z-index:998">
							        	<ul>								        	
								          	<li><span class="field_name">
													Mã:
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
													<a href="#content">Thông tin sản phẩm</a>
													<div class="dropdownClass cuidados_wrap">
															
															<div class="title">Mô tả</div>
										                    <div class="container article_description" style="white-space: normal !important;">
										                    	<?php echo $item->mota ?>	
										                    </div>
									                    
									                    	<div class="title">Thành phần:</div>
															
																<div class="container">
																<?php echo $item->thanhphan ?>	
																</div>
															<div class="title">Care</div>
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
																	
																			<p class="price  pPrice_7000000000000000563" id="pPrice">$35<span class="decimal">.90</span></p>	
																</td>
																
													                <td class="quantity" id="quantity_7000000000000000563_1">
													                 	<input readonly="readonly" id="units_7000000000000000563_1" value="0" name="units_7000000000000000563_1" class="units_7000000000000000563_1" size="2">
													                </td>
													                <td class="sc_cant">
													                    <div id="units_7000000000000000563_1" class="sc_cant_wrp">
													                    <div class="sc_cant_up"></div><div class="sc_cant_down"></div></div>
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
											
												<tbody><tr>
													<td width="50%">
															<button id="button_submit" type="button" value="Añadir a cesta" class="button butBlack butAddCart"><span>Thêm vào giỏ hàng</span></button>
													</td>
													<td width="50%">
															<a id="buyButton" href="#" class="button butBlack buyButton"><span>Giỏ hàng</span></a>
													</td>
												</tr>								
											
									
										</tbody></table>			
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
		<div id="divId_lastRecentlyViewed" style="visibility: visible; zoom: 1; opacity: 1; "><div><!-- Start - JSP File Name:  ItxLastViewProductsDisplay.jsp -->
	<div class="line mod_up" style="margin-top:50px;">
		<div class="unit size1of1">
			<div class="section listProds">
				
				<p class="titleSection">Sản phẩm tương tự:</p>
			
				<ul class="listH">
					<?php foreach ($relates as $item)
					{?>
						<li>				
							<a href="#" class="gaSource" data-ga-source-event="click" data-ga-source-value="UltimosProductosVistos">
								<?php echo $item->product_image ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div></div>
	<!-- Últimos productos vistos: -->
	
	<!-- End - JSP File Name:  ItxCachedBundleProductView.jsp -->
			</div>
<!-------------end body--------------->		