<?php foreach ($formData as $row) : ?> 
<section id="main" class="column" style="width:100%;">	
	
<form action="<?php echo base_url()?>lienhe/admin/saveContactUs" method="post">    
	<article class="module width_full" style="width:95%;">
		<header>
			<h3><?php echo $this->lang->line('contact-contact'); ?></h3>			
		</header>		
		<div class="module_content">
			<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label><?php echo $this->lang->line('contact-address-vn');?></label>
				<textarea name="address_vn" id="address_vn"><?php echo $row->address_vn; ?></textarea>
				<?php echo display_ckeditor($address_vn); ?>
			</fieldset><div class="clear"></div>
			<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label><?php echo $this->lang->line('contact-address-en');?></label>
				<textarea name="address_en" id="address_en"><?php echo $row->address_en; ?></textarea>
				<?php echo display_ckeditor($address_en); ?>
			</fieldset><div class="clear"></div>
			<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label><?php echo $this->lang->line('contact-info-vn');?></label>
				<textarea name="info_vn" id="info_vn"><?php echo $row->info_vn; ?></textarea>
				<?php echo display_ckeditor($info_vn); ?>
			</fieldset><div class="clear"></div>
			<fieldset style="width:100%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
				<label><?php echo $this->lang->line('contact-info-en');?></label>
				<textarea name="info_en" id="info_en"><?php echo $row->info_en; ?></textarea>
				<?php echo display_ckeditor($info_en); ?>
			</fieldset><div class="clear"></div>
			<fieldset>
				<label><?php echo $this->lang->line('contact-email'); ?></label>
				<input type="text" name="email" value="<?php echo $row->email; ?>"/>	
			</fieldset>
			<fieldset>
				<label><?php echo $this->lang->line('contact-phone'); ?></label>
				<input type="text" name="phone_number" value="<?php echo $row->phone_number; ?>"/>	
			</fieldset>
			<fieldset>
				<label><?php echo $this->lang->line('contact-fax'); ?></label>
				<input type="text" name="fax_number" value="<?php echo $row->fax_number; ?>"/>	
			</fieldset>
		</div>
		<footer>
			<div class="submit_link">
				<input type="submit" value="<?php echo $this->lang->line('contact-update'); ?>" class="alt_btn">
			</div>
		</footer>
	</article><!-- end of post new article -->
</form>	
<?php endforeach;?>