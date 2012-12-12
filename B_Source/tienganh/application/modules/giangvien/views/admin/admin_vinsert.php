	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>giangvien/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Loại làng nghề</label>
					<select name="lecturers_category">
						<?php  foreach ($list as $item)
					 	{      ?>
						<option value="<?php echo $item->lecturers_category;?>"><?php echo $item->lecturers_category;?></option>
						<?php } ?>
					</select>
				</fieldset>
				<fieldset>
					<label>Nội dung </label>
					<?php echo $this->ckeditor->editor('lecturers_content','',$config);?>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('lecturers_image','',$config);?>
				</fieldset>
				
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		