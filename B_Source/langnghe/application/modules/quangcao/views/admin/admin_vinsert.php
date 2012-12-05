	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>quangcao/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Ảnh quảng cáo</label>
					<?php echo $this->ckeditor->editor('ads_banner','',$config);?>
				</fieldset>
				<fieldset>
					<label>Link Web</label>
					<input type="text" name="ads_link" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên quảng cáo</label>
					<?php echo $this->ckeditor->editor('ads_name','',$config);?>
				</fieldset>
				<fieldset>
					<label>Start date</label>
					<input type="text" name="ads_start_date" id="ads_start_date" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
				</fieldset>
				<fieldset>
					<label>End date</label>
					<input type="text" name="ads_start_date" id="ads_end_date" value="<?php echo date('Y/m/d', time()+7*3600);?>"/>
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
		