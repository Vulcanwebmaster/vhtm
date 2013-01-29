	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>bannerheader/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Image 1</label>
					<?php echo $this->ckeditor->editor('image1',$info->image1,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 2</label>
					<?php echo $this->ckeditor->editor('image2',$info->image2,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 3</label>
					<?php echo $this->ckeditor->editor('image3',$info->image3,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 4</label>
					<?php echo $this->ckeditor->editor('image4',$info->image4,$config);?>
				</fieldset>
				
				<fieldset>
					<label>Image 5</label>
					<?php echo $this->ckeditor->editor('image5',$info->image5,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 6</label>
					<?php echo $this->ckeditor->editor('image6',$info->image6,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 7</label>
					<?php echo $this->ckeditor->editor('image7',$info->image7,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 8</label>
					<?php echo $this->ckeditor->editor('image8',$info->image8,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 9</label>
					<?php echo $this->ckeditor->editor('image9',$info->image9,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 10</label>
					<?php echo $this->ckeditor->editor('image10',$info->image10,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 11</label>
					<?php echo $this->ckeditor->editor('image11',$info->image11,$config);?>
				</fieldset>
				<fieldset>
					<label>Image 12</label>
					<?php echo $this->ckeditor->editor('image12',$info->image12,$config);?>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		