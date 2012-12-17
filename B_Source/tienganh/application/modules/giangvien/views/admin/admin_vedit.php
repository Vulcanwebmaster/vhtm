	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>giangvien/admin/edit/<?php echo $info->lecturers_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên giảng viên </label>
					<input type="text" name="lecturers_title" style="width:92%" value="<?php echo $info->lecturers_title;?>"/>
				</fieldset>
				<fieldset>
					<label>Giảng viên</label>
					<select name="lecturers_category">
						<option value="Thầy giáo">Thầy giáo</option>
						<option value="Cô giáo">Cô giáo</option>
						<option value="Trợ giảng">Trợ giảng</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Nội dung </label>
					<?php echo $this->ckeditor->editor('lecturers_content',$info->lecturers_content,$config);?>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('lecturers_image',$info->lecturers_image,$config);?>
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
		