<?php foreach ($product as $row):?>
<form action="<?php echo base_url()?>sanpham/admin/updateProduct" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Product</h3></header>
			<div class="module_content">
				
						<fieldset style="width:48%; float:left;">
							<label>ID_Product</label>
							<input type="text" style="width:92%;" name="id" value="<?php echo $row->product_id?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;">
							<label>ID_Category</label>
							<input type="text" style="width:92%;" name="category_id" value="<?php echo $row->category_id?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Name product en</label>
							<input type="text" style="width:92%;" name="name_en" value="<?php echo $row->product_name_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Name product vn</label>
							<input type="text" style="width:92%;" name="name_vn" value="<?php echo $row->product_name_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product Units</label>
							<input type="text" style="width:92%;" name="product_units" value="<?php echo $row->product_units?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product Cartons</label>
							<input type="text" style="width:92%;" name="product_cartons" value="<?php echo $row->product_cartons?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product sales name vn</label>
							<input type="text" style="width:92%;" name="product_sales_name_vn" value="<?php echo $row->product_sales_name_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product sales name en</label>
							<input type="text" style="width:92%;" name="product_sales_name_en" value="<?php echo $row->product_sales_name_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction en</label>
							<input type="text" style="width:92%;" name="product_introductions_en" value="<?php echo $row->product_introductions_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction vn</label>
							<input type="text" style="width:92%;" name="product_introductions_vn" value="<?php echo $row->product_introductions_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction vn</label>
							<input type="text" style="width:92%;" name="product_convection_oven_en" value="<?php echo $row->product_convection_oven_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product_convection_oven_vn</label>
							<input type="text" style="width:92%;" name="product_convection_oven_vn" value="<?php echo $row->product_convection_oven_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_convection_oven_en</label>
							<input type="text" style="width:92%;" name="product_rotary_oven_vn" value="<?php echo $row->product_rotary_oven_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_rotary_oven_vn</label>
							<input type="text" style="width:92%;" name="product_rotary_oven_vn" value="<?php echo $row->product_rotary_oven_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_nutrient_content_en</label>
							<input type="text" style="width:92%;" name="product_nutrient_content_en" value="<?php echo $row->product_nutrient_content_en?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_nutrient_content_vn</label>
							<input type="text" style="width:92%;" name="product_nutrient_content_vn" value="<?php echo $row->product_nutrient_content_vn?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_new</label>
							<input type="text" style="width:92%;" name="product_new" value="<?php echo $row->product_new?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_featured</label>
							<input type="text" style="width:92%;" name="product_featured" value="<?php echo $row->product_featured?>">
						</fieldset><div class="clear"></div>
						<fieldset style="width: 48%">  <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_img</label>
							<?php echo $this->editor_library->filemanager('product_img',$row->product_img,'')?>
						</fieldset >
						
						<div class="clear"></div>
						<fieldset style="width: 48%"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_img_award</label>
							<?php echo $this->editor_library->filemanager('product_img_award',$row->product_img_award,'')?>
						</fieldset><div class="clear"></div>	
				</div>
				<?php endforeach?>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Update" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	