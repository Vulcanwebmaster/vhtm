<article class="module width_full">
<?php foreach ($category as $rw):?>
		<?php echo form_open("website/admin/updateCategory/".$rw->id)?>
			<header><h3>Edit Catogory</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Catogory Name</label>
							<input type="text" name="ctg_name" id="ctg_name" value="<?php echo $rw->name?>">
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
		<?php echo form_close();?>
<?php endforeach;?>
</article><!-- end of post new article -->
		<?php $this->load->view("admin/admin_portfolio_editcategory_listportfolio");?>