	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<form method="post" action="<?php echo base_url();?>album/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên album(Việt)</label>
					<input type="text" name="album_name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên album(Anh)</label>
					<input type="text" name="album_namee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id" id="category_id">
						<option value="0">Hình ảnh trung tâm</option>
						<option value="1">Hình ảnh khóa học</option>
						<option value="2">Hình ảnh sự kiện</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Ảnh đại diện</label>
					<?php echo $this->ckeditor->editor('album_avatar','',$config);?>
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
		