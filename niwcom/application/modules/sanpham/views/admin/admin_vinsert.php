	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>sanpham/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên sản phẩm</label>
					<input type="text" name="tensp" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Links</label>
					<input type="text" name="link" style="width:92%"/>
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
		