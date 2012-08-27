<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	    
<form action="<?php echo base_url();?>sanpham/admin/editProductById/<?php echo $info->product_id;?>" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">
						<fieldset>
							<label>Danh mục</label>
							<input type="text" name="danhmuc" value="<?php echo $info->category_id;?>"/>							
						</fieldset>
						<fieldset>
							<label>Tên (V)</label>
							<input type="text" name="tenv" value="<?php echo $info->product_name_vn;?>"/>							
						</fieldset>
						<fieldset>
							<label>Tên (E)</label>
							<input type="text" name="tene" value="<?php echo $info->product_name_en;?>"/>							
						</fieldset>						
						<fieldset>
							<label>Unit</label>
							<input type="text" name="unit" value="<?php echo $info->product_units;?>">							
						</fieldset>
						<fieldset>
							<label>Carton</label>
							<input type="text" name="carton" value="<?php echo $info->product_cartons;?>">							
						</fieldset>
						<fieldset>
							<label>Mô tả (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("motav",$info->product_sales_name_vn ,$config);?>	
							</center>				
						</fieldset>
						<fieldset>
							<label>Mô tả (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("motae",$info->product_sales_name_en, $config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("huongdanv",$info->product_introductions_vn ,$config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("huongdane",$info->product_introductions_en ,$config);?>	
							</center>			
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("lodoiluuv",$info->product_convection_oven_vn ,$config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("lodoiluue",$info->product_convection_oven_en ,$config);?>
							</center>								
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (V)</label>
							<?php echo $this->ckeditor->editor("loquayv",$info->product_rotary_oven_vn ,$config);;?>
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("loquaye",$info->product_rotary_oven_en ,$config);;?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("dinhduongv",$info->product_nutrient_content_vn ,$config);;?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("dinhduonge",$info->product_nutrient_content_en ,$config);;?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Sản phẩm mới</label>
							<select name="spmoi">
								<option value="0">Không</option>
								<option value="1">Có</option>
							</select>
						</fieldset>
						<fieldset>
							<label>Hình ảnh</label>
							<center>
								<?php echo $this->ckeditor->editor("hinhanh",$info->product_img ,$config);?>
							</center>							
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>