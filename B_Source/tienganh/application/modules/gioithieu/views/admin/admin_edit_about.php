	
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
				
				<fieldset>
					<label>Tiêu đề </label>
					<input type="text" name="about_title" style="width:92%" value="<?php echo $info->about_title;?>"/>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('about_image',$info->about_image,$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung </label>
					<?php echo $this->ckeditor->editor('about_content',$info->about_content,$config);?>
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
		