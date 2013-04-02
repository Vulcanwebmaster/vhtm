	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>step/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Step 1 (en)</label>
					<?php echo $this->ckeditor->editor('b1',$info->b1,$config);?>
				</fieldset>
				<fieldset>
					<label>Step 1 (fr)</label>
					<?php echo $this->ckeditor->editor('b1fr',$info->b1fr,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Step 2 (en)</label>
					<?php echo $this->ckeditor->editor('b2',$info->b2,$config);?>
				</fieldset>
				<fieldset>
					<label>Step 2 (fr)</label>
					<?php echo $this->ckeditor->editor('b2fr',$info->b2fr,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Step 3 (en)</label>
					<?php echo $this->ckeditor->editor('b3',$info->b3,$config);?>
				</fieldset>
				<fieldset>
					<label>Step 3 (fr)</label>
					<?php echo $this->ckeditor->editor('b3fr',$info->b3fr,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Titre pied (en)</label>
					<?php echo $this->ckeditor->editor('footer',$info->footer,$config);?>
				</fieldset>
				<fieldset>
					<label>Titre pied  (fr)</label>
					<?php echo $this->ckeditor->editor('footerfr',$info->footerfr,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Nouvelles de twitter(en)</label>
					<?php echo $this->ckeditor->editor('footer2',$info->footer2,$config);?>
				</fieldset>
				<fieldset>
					<label>Nouvelles de twitter(fr)</label>
					<?php echo $this->ckeditor->editor('footerfr2',$info->footerfr2,$config);?>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Éditer" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		