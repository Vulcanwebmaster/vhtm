	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>khoahoc/admin/edit/<?php echo $info->courses_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tên </label>
					<input type="text" name="courses_name" style="width:92%" value="<?php echo $info->courses_name;?>"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="courses_category">
						<option></option>
						<?php foreach ($list as $item)
						{
							if ($item->courses_id==$info->courses_category)
							{?>
								<option value="<?php echo $item->courses_id?>" selected="selected"><?php echo $item->cate_name;?></option>
							<?php }
							else {?>
								<option value="<?php echo $item->id?>"><?php echo $item->cate_name;?></option>
						<?php }}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="courses_date" id="ngaythang" value="<?php echo $info->courses_date;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung </label>
					<?php echo $this->ckeditor->editor('courses_content',$info->courses_content,$config);?>
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
		