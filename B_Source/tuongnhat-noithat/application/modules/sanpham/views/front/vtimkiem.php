<script type="text/javascript" src="<?php echo base_url();?>assets/tuongnhatp2/js/highlight-product.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//-- set up pagination --
		$("#pagination-control a").click(function(){
			var page = parseInt($(this).text());
			var index = 0;
			if (page != 1)
				index += (page-1)*<?php echo $per_page;?>;
			
			window.location = "<?php echo base_url();?>sanpham/timkiem/"+index+"?searchTerm=<?php echo $_SESSION['keySearch']?>&searchBtn=+";
			return false;
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
				<li class="filter sliderFilter" id="price">
					<a class="arrow filterTitle" id="drop_precio" style="font-weight: normal; ">Giá</a>
                    <select></select>
                </li>
			</ul>
		</div>
	</div>
	<div class="unit size1of4">
		<div class="numSearchResult">
			<ul class="listH">
				<li>
					<span class="totalProducts" style="visibility: visible; zoom: 1; opacity: 1; "><?php if ($totalProducts) echo $totalProducts?></span>
					<span class="totalProductsText">
						Sản phẩm
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
			<?php if (count($listProducts) > 0)
			{?>
			<ul id="catProdsContainer" class="listH" style="visibility: visible; zoom: 1; opacity: 1; ">
				<?php foreach ($listProducts as $product)
				{?>
					<li class="filteredItem">
						<a href="#" class="mainProductLink pLink">
							<?php echo $product->product_image;?>
							<?php if ($product->is_new=='1')
							{?>
							<span class="new" style="background-image:url(<?php echo base_url()?>assets/tuongnhatp2/images/nuevo_flag_home_en.gif)"></span>
							<?php }?>
						</a>
						<a class="descArt productName pLink" href="#">
							<?php if ($_SESSION['lang'] == 'en') echo $product->product_name_e;
							else echo $product->product_name_v;?>
						</a>
						<p class="price"><?php echo $product->product_price;?></p>
					</li>
				<?php }?>
			</ul>
			<?php }
			else {?>
				<p>Không có sản phẩm nào</p>
			<?php }?>
		</div>
	</div>
</div>
				<!--/line-->
<div id="pagination-control">
	<?php echo $this->pagination->create_links();?>
</div>
		
		<div class="line mod">
        	<div class="unit size2of3">
	          	<div class="numSearchResultFoot">
	              <ul class="listH">
	                <li>
	                	<span class="totalProducts" style="visibility: visible; zoom: 1; opacity: 1; ">
							<?php if ($totalProducts) echo $totalProducts?>
						</span>
	                	<span class="totalProductsText">
							Sản phẩm
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