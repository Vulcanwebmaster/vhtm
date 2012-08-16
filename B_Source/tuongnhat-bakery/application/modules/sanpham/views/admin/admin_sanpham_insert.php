<form action="<?php echo base_url()?>sanpham/admin/insertProduct" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Contact Infomation</h3></header>
			<div class="module_content">
						<fieldset style="width:48%; float:left;">
							<label>ID_Category</label>
							<select name="myselect">
							<?php foreach($category as $rows):?>
								<option value="<?php echo $rows->category_id;?>" <?php echo set_select('myselect', $rows->category_id, TRUE); ?> ><?php if($rows->category_name_en==""){echo $rows->category_name_vn;} else{echo $rows->category_name_en;}?></option>
							<?php endforeach;?>
							</select> 
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Name product en</label>
							<input type="text" style="width:92%;" name="name_en" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Name product vn</label>
							<input type="text" style="width:92%;" name="name_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product Units</label>
							<input type="text" style="width:92%;" name="product_units" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product Cartons</label>
							<input type="text" style="width:92%;" name="product_cartons" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product sales name vn</label>
							<input type="text" style="width:92%;" name="product_sales_name_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product sales name en</label>
							<input type="text" style="width:92%;" name="product_sales_name_en" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction en</label>
							<input type="text" style="width:92%;" name="product_introductions_en" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction vn</label>
							<input type="text" style="width:92%;" name="product_introductions_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product introduction vn</label>
							<input type="text" style="width:92%;" name="product_convection_oven_en" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Product_convection_oven_vn</label>
							<input type="text" style="width:92%;" name="product_convection_oven_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_convection_oven_en</label>
							<input type="text" style="width:92%;" name="product_rotary_oven_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_rotary_oven_vn</label>
							<input type="text" style="width:92%;" name="product_rotary_oven_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_nutrient_content_en</label>
							<input type="text" style="width:92%;" name="product_nutrient_content_en" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_nutrient_content_vn</label>
							<input type="text" style="width:92%;" name="product_nutrient_content_vn" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_new</label>
							<input type="text" style="width:92%;" name="product_new" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_featured</label>
							<input type="text" style="width:92%;" name="product_featured" value="">
						</fieldset><div class="clear"></div>
						<fieldset style="width: 48%">  <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_img</label>
							<?php echo $this->editor_library->filemanager('product_img','','')?>
						</fieldset >
						
						<div class="clear"></div>
						<fieldset style="width: 48%"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>product_img_award</label>
							<?php echo $this->editor_library->filemanager('product_img_award','','')?>
						</fieldset><div class="clear"></div>
				</div>
				<footer>
					<div class="submit_link">
						<input type="submit" value="Insert" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	