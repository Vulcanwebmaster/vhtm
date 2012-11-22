<section id="main" class="column" style="width:100%;">
<form action="<?php echo base_url()?>sanpham/admin/insert" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Nhập thông tin sản phẩm</h3></header>
			<div class="module_content" style="max-height:400px;overflow: auto">
				<fieldset>
					<label>Tên sản phẩm</label>
					<input type="text" name="product_name">
					<span class="validate"><?php echo form_error('product_name');?></span>
				</fieldset>
				<fieldset>
					<label>Giá</label>
					<input type="text" name="product_price">
					<span class="validate"><?php echo form_error('product_price');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện</label>
					<?php echo $this->ckeditor->editor('product_image',"",$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image');?></span>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="is_new">
						<option value="0">Không</option>
						<option value="1">Có</option>
					</select>
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
									<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name ?></option>
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