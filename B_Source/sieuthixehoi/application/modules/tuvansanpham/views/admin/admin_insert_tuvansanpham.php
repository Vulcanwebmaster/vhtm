	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>tuvansanpham/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tiêu đề</label>
					<input type="text" name="title" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Danh mục cha</label>
					<select name="parent_id">
						<option value="2">Tư vấn nội thất</option>
						<option value="1">Tư vấn mua xe</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Nội dung</label>
					<?php echo $this->ckeditor->editor('content','',$config);?>
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
		