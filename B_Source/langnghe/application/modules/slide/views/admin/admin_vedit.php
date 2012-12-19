	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>slide/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Slide ảnh 1</label>
					<?php echo $this->ckeditor->editor('anh1',$info->anh1,$config);?>
				</fieldset>
				<fieldset>
					<label>Slide ảnh 2</label>
					<?php echo $this->ckeditor->editor('anh2',$info->anh2,$config);?>
				</fieldset>
				<fieldset>
					<label>Slide ảnh 3</label>
					<?php echo $this->ckeditor->editor('anh3',$info->anh3,$config);?>
				</fieldset>
				<fieldset>
					<label>Slide ảnh 4</label>
					<?php echo $this->ckeditor->editor('anh4',$info->anh4,$config);?>
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
		