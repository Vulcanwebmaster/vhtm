	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>gioithieu/admin/edit/<?php echo $info->about_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<!--<fieldset>
					<label>Giới thiệu</label>
					<select name="about_category">
						<?php  foreach ($list as $item)
					 	{      ?>
						<option value="<?php echo $item->about_category;?>"><?php echo $item->about_category;?></option>
						
						<?php } ?>
					</select>
				</fieldset>-->
				<fieldset>
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('about_content',$info->about_content,$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung (Anh)</label>
					<?php echo $this->ckeditor->editor('about_contente',$info->about_contente,$config);?>
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
		