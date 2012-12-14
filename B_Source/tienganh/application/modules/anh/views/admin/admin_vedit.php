	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>anh/admin/edit/<?php echo $info->image_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tên ảnh </label>
					<input type="text" name="image_name" style="width:92%" value="<?php echo $info->image_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Mục ảnh</label>
					<select name="news_category">
						<option value="0">Hình ảnh trung tâm</option>
						<option value="1">Hình ảnh khóa học</option>
						<option value="2">Hình ảnh sự kiện</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('image_album',$info->image_album,$config);?>
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
		