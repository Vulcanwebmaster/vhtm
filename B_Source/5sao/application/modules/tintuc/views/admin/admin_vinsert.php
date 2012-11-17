	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<link rel="stylesheet" href="<?php echo base_url();?>assets/5sao/datepicker/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>assets/5sao/datepicker/jquery-1.8.0.js"></script>
<script src="<?php echo base_url();?>assets/5sao/datepicker/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>assets/5sao/datepicker/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>assets/5sao/datepicker/ui/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/5sao/datepicker/themes/base/demos.css">
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
					<input type="text" name="tieude_v" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề (Anh)</label>
					<input type="text" name="tieude_e" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('noidung_v','',$config);?>
				</fieldset>
				<fieldset>
					<label>Nội dung (Anh)</label>
					<?php echo $this->ckeditor->editor('noidung_e','',$config);?>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="ngaythang" id="ngaythang" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>Tác giả</label>
					<input type="text" name="tacgia"/>
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
		