	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
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
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('noidung','',$config);?>
				</fieldset>
				<fieldset>
					<label>Liên hệ</label>
					<input type="text" name="id_lienhe"/>
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
		