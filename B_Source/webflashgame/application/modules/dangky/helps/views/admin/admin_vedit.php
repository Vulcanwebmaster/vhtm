	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>helps/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Titre (en)</label>
					<?php echo $this->ckeditor->editor('title',$info->title,$config);?>
				</fieldset>
				<fieldset>
					<label>Titre (fr)</label>
					<?php echo $this->ckeditor->editor('titlefr',$info->titlefr,$config);?>
				</fieldset>
				
				<fieldset>
					<label>description (en)</label>
					<?php echo $this->ckeditor->editor('description',$info->description,$config);?>
				</fieldset>
				<fieldset>
					<label>description (fr)</label>
					<?php echo $this->ckeditor->editor('descriptionfr',$info->descriptionfr,$config);?>
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
		