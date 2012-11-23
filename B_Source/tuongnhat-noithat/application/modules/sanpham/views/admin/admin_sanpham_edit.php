<section id="main" class="column" style="width:100%;">
<form action="<?php echo base_url();?>sanpham/admin/edit/<?php echo $query->product_id ?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Thông tin sản phẩm</h3></header>
			<div class="module_content" style="max-height:400px;overflow: auto">
				<fieldset>
					<label>Tên sản phẩm(Việt)</label>
					<input type="text" name="product_name_v" value="<?php echo $query->product_name_v?>">
					<span class="validate"><?php echo form_error('product_name_v');?></span>
				</fieldset>
				<fieldset>
					<label>Tên sản phẩm(Anh)</label>
					<input type="text" name="product_name_e" value="<?php echo $query->product_name_e?>">
					<span class="validate"><?php echo form_error('product_name_e');?></span>
				</fieldset>
				<fieldset>
					<label>Giá</label>
					<input type="text" name="product_price" value="<?php echo $query->product_price?>">
					<span class="validate"><?php echo form_error('product_price');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện (1)</label>
					<?php echo $this->ckeditor->editor('product_image',$query->product_image,$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện (2)</label>
					<?php echo $this->ckeditor->editor('product_image2',$query->product_image2,$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image2');?></span>
				</fieldset>
				<fieldset>
					<label>Mô tả</label>
					<?php echo $this->ckeditor->editor('mota',$query->mota,$config);?>
					<span class="validate_ckeditor"><?php echo form_error('mota');?></span>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="is_new">
						<option value="<?php echo $query->is_new ?>"><?php if($query->is_new == 0) echo 'Không'; else echo 'Có';?></option>
						<?php if($query->is_new == 0){?>
							<option value="1">Có</option>
						<?php }else{?>
							<option value="0">Không</option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Thành phần</label>
					<input type="text" name="thanhphan" value="<?php echo $query->thanhphan?>">
					<span class="validate"><?php echo form_error('thanhphan');?></span>
				</fieldset>
				<fieldset>
					<label>care</label>
					<input type="text" name="care" value="<?php echo $query->care?>">
					<span class="validate"><?php echo form_error('care');?></span>
				</fieldset>
				<fieldset>
					<label>Mã sp</label>
					<input type="text" name="product_ma" value="<?php echo $query->product_ma?>">
					<span class="validate"><?php echo form_error('product_ma');?></span>
				</fieldset>
				<fieldset>
					<label>size</label>
					<input type="text" name="size" value="<?php echo $query->size?>">
					<span class="validate"><?php echo form_error('size');?></span>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<?php 
						$m = new CI_Model();
						$categoryName = $m->getRowById('tn_categories','category_id',$query->category_id);
					?>
					<select name="category_id">
						<?php if(isset($categoryName->category_name_v)){?>
						<option value="<?php echo $query->category_id ?>"><?php echo $categoryName->category_name_v ?></option>
						<?php 
						}
						else {
							?>
								<option value="0"></option>
							<?php
						}
						if(count($listCategory) > 0){
							foreach($listCategory as $category){
								if($category->category_id != $query->category_id){
									?>
										<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name_v ?></option>
									<?php
								}		
							}
						}
						if(isset($categoryName->category->name)){
							?>
								<option value="0"></option>
							<?php
						}
						?>
					</select>
				</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" name="submit" class="alt_btn">
				</div>
			</footer>

		</article><!-- end of post new article -->
</form>	
<!-- End Contact Info -->

		<div class="clear"></div>

</section>

</body>