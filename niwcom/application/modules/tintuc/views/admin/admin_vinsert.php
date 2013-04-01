	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>tintuc/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tiêu đề (Việt)</label>
					<input type="text" name="tieude" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề (Anh)</label>
					<input type="text" name="tieudee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Trạng thái</label>
					<select name="duyet">
							<option value="1">Duyệt</option>
							<option value="0">Chưa Duyệt</option>
					</select>
				</fieldset>
				<fieldset>
					<?php  foreach ($tag_name as $value) { ?>
					<label><?php echo $value->tentag;?></label>
					<input type="checkbox" name="tags[]" value="<?php echo $value->id;?>"/>
					<?php } ?>
				</fieldset>
				<fieldset>
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('noidung','',$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung (Anh)</label>
					<?php echo $this->ckeditor->editor('noidunge','',$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('hinhanh','',$config);?>
				</fieldset>
			</div>
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm mới" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		