	
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
					<label>Tiêu đề </label>
					<input type="text" name="news_title" style="width:92%" value="<?php echo $info->news_title;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung </label>
					<?php echo $this->ckeditor->editor('news_content',$info->news_content,$config);?>
				</fieldset>
				<fieldset>
					<label>Ảnh </label>
					<?php echo $this->ckeditor->editor('news_image',$info->news_image,$config);?>
				</fieldset>
				<fieldset>
					<label>Tóm tắt </label>
					<?php echo $this->ckeditor->editor('news_summary',$info->news_summary,$config);?>
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
		