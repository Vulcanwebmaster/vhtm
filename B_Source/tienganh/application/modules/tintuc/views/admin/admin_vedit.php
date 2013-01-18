	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>tintuc/admin/edit/<?php echo $info->news_id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Mục tin tức</label>
					<select name="news_category">
						<option value="Tiếng Anh mầm non">Tiếng Anh mầm non</option>
						<option value="Tiếng Anh tiểu học">Tiếng Anh tiểu học</option>
						<option value="Tiếng Anh cho sinh viên">Tiếng Anh cho sinh viên</option>
						<option value="Tiếng Anh cho người đi làm">Tiếng Anh cho người đi làm</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Tiêu đề(Việt) </label>
					<?php echo $this->ckeditor->editor('news_title',$info->news_title,$config);?>
					<!--<input type="text" name="news_title" style="width:92%" value="<?php echo $info->news_title;?>"/>-->
				</fieldset>
				<fieldset>
					<label>Tiêu đề (Anh)</label>
					<?php echo $this->ckeditor->editor('news_titlee',$info->news_titlee,$config);?>
					<!--<input type="text" name="news_title" style="width:92%" value="<?php echo $info->news_title;?>"/>-->
				</fieldset>
				
				<fieldset>
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('news_content',$info->news_content,$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung (Anh)</label>
					<?php echo $this->ckeditor->editor('news_contente',$info->news_contente,$config);?>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('news_image',$info->news_image,$config);?>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="news_post_date" id="ngaythang" value="<?php echo $info->news_post_date;?>"/>
				</fieldset>
				<fieldset>
					<label>Tác giả</label>
					<input type="text" name="news_author" value="<?php echo $info->news_author;?>"/>
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
		