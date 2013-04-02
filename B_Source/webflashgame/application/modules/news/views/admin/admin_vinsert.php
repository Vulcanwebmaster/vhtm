	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/datepicker/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>assets/flash_game/datepicker/jquery-1.8.0.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>assets/flash_game/datepicker/ui/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/flash_game/datepicker/themes/base/demos.css">
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>news/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				

				<fieldset>
					<label>Nom (Fr)</label>
					<input type="text" name="name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Nom (En)</label>
					<input type="text" name="namee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Teneur (Fr)</label>
					<?php echo $this->ckeditor->editor('content','',$config);?>
				</fieldset>
				<fieldset>
					<label>Teneur (En)</label>
					<?php echo $this->ckeditor->editor('contente','',$config);?>
				</fieldset>
				<fieldset>
					<label>Images</label>
					<?php echo $this->ckeditor->editor('image','',$config);?>
				</fieldset>
				<fieldset>
					<?php  foreach ($tag_name as $value) { ?>
					<label><?php echo $value->name;?></label>
					<input type="checkbox" name="tags[]" value="<?php echo $value->id;?>"/>
					<?php } ?>
				</fieldset>
				<fieldset>
					<label>date</label>
					<input type="text" name="create_date" id="ngaythang" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>auteur</label>
					<input type="text" name="author"/>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="rajouter" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		