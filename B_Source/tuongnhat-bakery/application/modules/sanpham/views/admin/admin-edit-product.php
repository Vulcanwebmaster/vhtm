<form action="admin/savePostApp" method="post">
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
								<textarea id="motav" name="motav"><?php echo $info->product_sales_name_vn;?></textarea>
								<?php echo display_ckeditor($motav);?>		
							</center>				
						</fieldset>
						<fieldset>
							<label>Mô tả (E)</label>
							<center>
								<textarea id="motae" name="motae"><?php echo $info->product_sales_name_en;?></textarea>
								<?php echo display_ckeditor($motae);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (V)</label>
							<center>
								<textarea id="huongdanv" name="huongdanv"><?php echo $info->product_introductions_vn;?></textarea>
								<?php echo display_ckeditor($huongdanv);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (E)</label>
							<center>
								<textarea id="huongdane" name="huongdane"><?php echo $info->product_introductions_en;?></textarea>
								<?php echo display_ckeditor($huongdane);?>	
							</center>			
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (V)</label>
							<center>
								<textarea id="lodoiluuv" name="lodoiluuv"><?php echo $info->product_convection_oven_vn;?></textarea>
								<?php echo display_ckeditor($lodoiluuv);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (E)</label>
							<center>
								<textarea id="lodoiluue" name="lodoiluue"><?php echo $info->product_convection_oven_en;?></textarea>
								<?php echo display_ckeditor($lodoiluue);?>
							</center>								
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (V)</label>
							<textarea id="loquayv" name="loquayv"><?php echo $info->product_rotary_oven_vn;?></textarea>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (E)</label>
							<center>
								<textarea id="loquaye" name="loquaye"><?php echo $info->product_rotary_oven_en;?></textarea>
								<?php echo display_ckeditor($loquaye);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (V)</label>
							<center>
								<textarea id="dinhduongv" name="dinhduongv"><?php echo $info->product_nutrient_content_vn;?></textarea>
								<?php echo display_ckeditor($dinhduongv);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (E)</label>
							<center>
								<textarea id="dinhduonge" name="dinhduonge"><?php echo $info->product_nutrient_content_en;?></textarea>
								<?php echo display_ckeditor($dinhduonge);?>
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
								<textarea id="hinhanh" name="hinhanh"><?php echo $info->product_img;?></textarea>
								<?php echo display_ckeditor($hinhanh);?>
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