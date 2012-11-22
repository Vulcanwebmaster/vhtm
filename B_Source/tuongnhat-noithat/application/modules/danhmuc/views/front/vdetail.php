<script type="text/javascript">
       $(document).ready(function(){
       $('.arrow').click(function(){
       	$(this).children('.filterBox').slideToggle();
       });
       });
</script>
<style type="text/css">
	#background-image{display:none}
</style>

<!--/line - breadcrumbs-->				
<input type="hidden" id="sliderMaxPrice" value="500"/>
<input type="hidden" id="stepSliderPrice" value="50"/>				
<!--line - filters-->             
				<div class="line">
					<div class="unit size3of4">
						<div class="filters">
            				<ul class="listH">            				
		              					<li class="filter checkFilter" filterid="feature" id="ctas">
											<a id="drop_ctas" class="filterTitle arrow" style="font-weight: normal; ">Đặc điểm</a>
									 	<div id="ctas_wrap" class="filterBox">
											<form action="#" method="post">
												<ul>
                                                	<li><input type="checkbox" class="filterCheck" value="7000000000000002594">Metal</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002549">Plastic</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002624">Baskets</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002599">Wardrobe sachet </li>												
														<li><input type="checkbox" class="filterCheck" value="7000000000000002051">Eye mask</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000003509">Shot</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002535">Bread basket and dish</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000003003">Printed</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002021">Stainless steel</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002545">Plate chargers</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002551">Brass</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002024">for water</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002044">for wine</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002029">for sparkling wine</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002032">for cocktails</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002621">Ashtrays</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002582">Wood</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002513">Resin</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002613">Candelabra</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002536">Porcelain</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002027">Glass</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002623">Ceramic</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000003009">	Bottle</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002031">Candles</li>
														<li><input type="checkbox" class="filterCheck" value="7000000000000002067">Tealights</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002591">Embroidered</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002068">Cotton towelling</li>													
														<li><input type="checkbox" class="filterCheck" value="7000000000000002540">Bath Sets</li>													
												</ul>	
											</form>					
										</div>	
										</li>								
										<li class="filter checkFilter" id="color">
											<a class="filterTitle arrow" id="drop_color" style="font-weight: normal; ">Màu sắc</a>
						<div id="color_wrap" class="filterBox">												
							<form action="#" method="post">												
									<ul>														
											<li><input type="checkbox" class="filterCheck" value="7000000000000002645">Trắng</li>														
											<li><input type="checkbox" class="filterCheck" value="7000000000000002020">Khác</li>														
											<li><input type="checkbox" class="filterCheck" value="7000000000000002646">Đen</li>
											<li><input type="checkbox" class="filterCheck" value="7000000000000002005">Màu Hồng</li>
											<li><input type="checkbox" class="filterCheck" value="7000000000000002570">Màu đen Vani</li>														
											<li><input type="checkbox" class="filterCheck" value="7000000000000002009">Màu đen xám</li>														
											<li><input type="checkbox" class="filterCheck" value="7000000000000002002">Màu xanh</li>
											<li><input type="checkbox" class="filterCheck" value="7000000000000002012">Màu đỏ</li>
											<li><input type="checkbox" class="filterCheck" value="7000000000000002006">Màu Xám</li>
											<li><input type="checkbox" class="filterCheck" value="7000000000000002001">Màu Vàng</li>
									</ul>
							</form>																																								
						</div>													
						</li>									
				<li class="filter sliderFilter" filterid="price" id="price">
                	<a class="arrow filterTitle" id="drop_precio" style="font-weight: normal; ">Giá</a>
                    <div id="precio_wrap" class="filterBox">
						<div class="sliderWrap">
							<div id="slider">
								<div id="knob" style="top: 0px; position: relative; ">0$</div>
		<div id="slider_active" style="height: 5px; ">
							</div>
							</div>
						</div>
					</div>
                </li>
			
			</ul>
		</div>
	</div>
	<div class="unit size1of4">
		<div class="numSearchResult">
			<ul class="listH">
				<li>
					<span class="totalProducts" style="visibility: visible; zoom: 1; opacity: 1; "><?php if ($listProducts) echo count($listProducts)?></span>
					<span class="totalProductsText">
						Items
					</span>
				</li>								
			</ul>
		</div>						
	</div>
	</div>
				<div class="line mkSpotCont">
        			<div class="unit size1of1">						
					</div>
				</div>
								
				<!--line-->
<div id="categoryProducts" class="line pp">
	<div class="unit size1of1 lastUnit">
		<!--mod - selectionProds-->
<div class=" selectionProds">
	<!-- Contenedor para los productos -->
<ul id="catProdsContainer" class="listH" style="visibility: visible; zoom: 1; opacity: 1; ">
	<?php foreach ($listProducts as $product)
	{?>
		<li class="filteredItem">
			<a href="#" class="mainProductLink pLink">
				<!-- img alt="<?php echo $product->product_name?>" src="../images/5958000700_1_1_3.jpg"/ -->
				<?php echo $product->product_image;?>
				<span class="express" >Quick<br>purchase</span>
				<?php if ($product->is_new=='1')
				{?>
				<span class="new" style="background-image:url(<?php echo base_url()?>assets/tuongnhatp2/images/nuevo_flag_home_en.gif)"></span>
				<?php }?>
			</a>
			<a class="descArt productName pLink" href="#"><?php echo $product->product_name?></a>
			<p class="price"><?php echo $product->product_price;?></p>
		</li>
	<?php }?>

                            </ul>
						</div>
					</div>
				</div>
				<!--/line-->
		
		
		<div class="line mod">
        	<div class="unit size2of3">
	          	<div class="numSearchResultFoot">
	              <ul class="listH">
	                <li>
	                	<span class="totalProducts" style="visibility: visible; zoom: 1; opacity: 1; ">94</span>
	                	<span class="totalProductsText">
							Items
						</span>
	                </li>
				    
				   </ul>
	            </div>
	            
         	</div>
        	<div class="unit size1of3">
				<div class="scrolltop">
					<a href="#">Back to top</a>
				</div>
            </div>
        </div>