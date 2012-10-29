<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>sanpham/admin/edit/<?php echo $query->product_id ?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Thông tin sản phẩm</h3></header>
			<div class="module_content" style="max-height:400px;overflow: auto">
				<fieldset>
					<label>Tên sản phẩm</label>
					<input type="text" name="product_name" value="<?php echo $query->product_name?>">
					<span class="validate"><?php echo form_error('product_name');?></span>
				</fieldset>
				<fieldset>
					<label>Giá</label>
					<input type="text" name="product_price" value="<?php echo $query->product_price?>">
					<span class="validate"><?php echo form_error('product_price');?></span>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện</label>
					<?php echo $this->ckeditor->editor('product_image',$query->product_image,$config);?>
					<span class="validate_ckeditor"><?php echo form_error('product_image');?></span>
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
					<label>Danh mục</label>
					<?php 
						$m = new CI_Model();
						$categoryName = $m->getRowById('tn_categories','category_id',$query->category_id);
					?>
					<select name="category_id">
						<?php if(isset($categoryName->category_name)){?>
						<option value="<?php echo $query->category_id ?>"><?php echo $categoryName->category_name ?></option>
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
										<option value="<?php echo $category->category_id ?>"><?php echo $category->category_name ?></option>
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