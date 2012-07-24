<article class="module width_full">
		<?php echo form_open("portfolio/admin/addCategory/")?>
			<header><h3>New Catogory</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Catogory Name</label>
							<input type="text" name="ctg_name" id="ctg_name" value="">
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Insert" class="alt_btn">
				</div>
			</footer>
		<?php echo form_close();?>