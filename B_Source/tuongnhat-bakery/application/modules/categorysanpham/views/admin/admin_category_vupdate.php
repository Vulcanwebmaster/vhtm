<?php foreach ($product as $row):?>
<form action="<?php echo base_url()?>categorysanpham/admin/updateCategory/<?php echo $row->category_id?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3><?php echo $this->lang->line('category-admin-product-category');?></h3></header>		
			<div class="module_content">
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('category-admin-name-en');?></label>
					<input type="text" style="width:96.5%;" name="category_name_en" value="<?php echo $row->category_name_en?>">
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('category-admin-name-vn');?></label>
					<input type="text" style="width:96.5%;" name="category_name_vn" value="<?php echo $row->category_name_vn?>">
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
					<label><?php echo $this->lang->line('category-admin-description-en');?></label>
					<?php echo $this->ckeditor->editor('catogories_decription_en',$row->catogories_decription_en,$config);?>
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
					<label><?php echo $this->lang->line('category-admin-description-vn');?></label>
					<?php echo $this->ckeditor->editor('catogories_decription_vn',$row->catogories_decription_vn,$config);?>
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
					<label><?php echo $this->lang->line('category-admin-image');?></label>
					<?php echo $this->ckeditor->editor('category_image',$row->category_image,$config);?>
				</fieldset><div class="clear"></div>	
			</div>		
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('category-admin-update');?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<?php endforeach?>