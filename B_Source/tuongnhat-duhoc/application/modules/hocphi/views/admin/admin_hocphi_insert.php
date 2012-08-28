<form action="<?php echo base_url()?>hocphi/admin/insertFee" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3><?php echo $this->lang->line('hocphi-admin-product-hocphi');?></h3></header>
			<div class="module_content">
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('hocphi-admin-fee-name-vn');?></label>
					<input type="text" style="width:96.5%;" name="fee_name_vn" value="">
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('hocphi-admin-fee-name-en');?></label>
					<input type="text" style="width:96.5%;" name="fee_name_en" value="">
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('hocphi-admin-fee-decription-vn');?></label>
					<input type="text" style="width:96.5%;" name="fee_decription_vn" value="">
				</fieldset><div class="clear"></div>
				<fieldset style="width:100%; float:left;">
					<label><?php echo $this->lang->line('hocphi-admin-fee-decription-en');?></label>
					<input type="text" style="width:96.5%;" name="fee_decription_en" value="">
				</fieldset><div class="clear"></div>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="<?php echo $this->lang->line('hocphi-admin-insert');?>" class="alt_btn">
				</div>
			</footer>
		</article><!-- end of post new article -->
</form>	