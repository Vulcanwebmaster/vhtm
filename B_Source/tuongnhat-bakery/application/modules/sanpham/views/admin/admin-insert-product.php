<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	 
<form action="<?php echo base_url();?>sanpham/admin/insertNewProduct" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">
						<fieldset>
							<label>Danh mục</label>
							<input type="text" name="danhmuc"/>							
						</fieldset>
						<fieldset>
							<label>Tên (V)</label>
							<input type="text" name="tenv"/>							
						</fieldset>
						<fieldset>
							<label>Tên (E)</label>
							<input type="text" name="tene"/>							
						</fieldset>						
						<fieldset>
							<label>Unit</label>
							<input type="text" name="unit"/>							
						</fieldset>
						<fieldset>
							<label>Carton</label>
							<input type="text" name="carton"/>							
						</fieldset>
						<fieldset>
							<label>Mô tả (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("motav",'' ,$config);?>	
							</center>				
						</fieldset>
						<fieldset>
							<label>Mô tả (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("motae",'', $config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("huongdanv",'' ,$config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hướng dẫn (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("huongdane",'' ,$config);?>	
							</center>			
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("lodoiluuv",'' ,$config);?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Sử dụng lò đối lưu (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("lodoiluue",'' ,$config);?>
							</center>								
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (V)</label>
							<?php echo $this->ckeditor->editor("loquayv",'' ,$config);;?>
						</fieldset>
						<fieldset>
							<label>Sử dụng lò quay (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("loquaye",'' ,$config);;?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (V)</label>
							<center>
								<?php echo $this->ckeditor->editor("dinhduongv",'' ,$config);;?>
							</center>							
						</fieldset>
						<fieldset>
							<label>Hàm lượng dinh dưỡng (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("dinhduonge",'',$config);;?>
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
								<?php echo $this->ckeditor->editor("hinhanh",'' ,$config);?>
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