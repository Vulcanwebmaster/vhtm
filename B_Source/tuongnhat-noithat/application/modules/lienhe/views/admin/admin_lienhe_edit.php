<section id="main" class="column" style="width:100%;">
<form action="<? echo base_url()?>lienhe/admin/edit/<?php echo $query->contact_id ?>" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Thông tin liên hệ</h3></header>
			<div class="module_content" style="max-height:400px;overflow: auto">
				
				<fieldset>
					<label>Tên người gửi</label>
					<input type="text" name="contact_name" value="<?php echo $query->contact_name?>">
					<span class="validate"><?php echo form_error('contact_name');?></span>
				</fieldset>
				<fieldset>
					<label>Địa chỉ email</label>
					<input type="text" name="contact_email" value="<?php echo $query->contact_email?>">
					<span class="validate"><?php echo form_error('contact_email');?></span>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<input type="text" name="category_id" value="<?php echo $category->category_name?>" readonly="readonly">
					<span class="validate"><?php echo form_error('category_id');?></span>
				</fieldset>
				<fieldset>
					<label>Tiêu đề</label>
					<input type="text" name="contact_subject" value="<?php echo $query->contact_subject?>">
					<span class="validate"><?php echo form_error('contact_subject');?></span>
				</fieldset>
				<fieldset>
					<label>Nội dung</label>
					<?php echo $this->ckeditor->editor('contact_message',$query->contact_message,$config);?>
					<span class="validate_ckeditor"><?php echo form_error('contact_message');?></span>
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