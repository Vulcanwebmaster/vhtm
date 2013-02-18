	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>banner/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Photo 1</label>
					<?php echo $this->ckeditor->editor('image1',$info->image1,$config);?>
				</fieldset>
				<fieldset>
					<label>Photo 2</label>
					<?php echo $this->ckeditor->editor('image2',$info->image2,$config);?>
				</fieldset>
				<fieldset>
					<label>Photo 3</label>
					<?php echo $this->ckeditor->editor('image3',$info->image3,$config);?>
				</fieldset>
				<fieldset>
					<label>Photo 4</label>
					<?php echo $this->ckeditor->editor('image4',$info->image4,$config);?>
				</fieldset>
				<fieldset>
					<label>Photo 5</label>
					<?php echo $this->ckeditor->editor('image5',$info->image5,$config);?>
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
		