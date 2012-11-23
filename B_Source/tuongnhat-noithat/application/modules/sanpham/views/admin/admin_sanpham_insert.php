<section id="main" class="column" style="width:100%;">
<form action="<?php echo base_url()?>sanpham/admin/insert" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Nhập thông tin sản phẩm</h3></header>
			<div class="module_content" style="max-height:400px;overflow: auto">
				<fieldset>
					<label>Tên sản phẩm(Việt)</label>
					<input type="text" name="product_name_v">
					<span class="validate"><?php echo form_error('product_name_v');?></span>
				</fieldset>
				<fieldset>
					<label>Tên sản phẩm(Anh)</label>
					<input type="text" name="product_name_e">
					<span class="validate"><?php echo form_error('product_name_e');?></span>
				</fieldset>
				<fieldset>
					<label>Giá</label>
					<input type="text" name="product_price">
					<span class="validate"><?php echo form_error('product_price');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện (1)</label>
					<?php echo $this->ckeditor->editor('product_image',"",$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện (2)</label>
					<?php echo $this->ckeditor->editor('product_image2',"",$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image2');?></span>
				</fieldset>
				<fieldset>
					<label>Mô tả</label>
					<?php echo $this->ckeditor->editor('mota',"",$config);?>
					<span class="validate_ckeditor"><?php echo form_error('mota');?></span>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="is_new">
						<option value="0">Không</option>
						<option value="1">Có</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Thành phần</label>
					<input type="text" name="thanhphan">
					<span class="validate"><?php echo form_error('thanhphan');?></span>
				</fieldset>
				<fieldset>
					<label>care</label>
					<input type="text" name="care">
					<span class="validate"><?php echo form_error('care');?></span>
				</fieldset>
				<fieldset>
					<label>Mã sp</label>
					<input type="text" name="product_ma">
					<span class="validate"><?php echo form_error('product_ma');?></span>
				</fieldset>
				<fieldset>
					<label>size</label>
					<input type="text" name="size">
					<span class="validate"><?php echo form_error('size');?></span>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id">
						<option value="0"></option>
						<?php
						if(count($listCategory) > 0)
						{
							foreach($listCategory as $category)
							{
								?>
									<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name_v ?></option>
								<?php
							}
						}?>
						
					</select>
				</fieldset>
			</div>
				<footer>
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
				</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>