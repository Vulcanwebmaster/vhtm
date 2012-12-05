	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>quangcao/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Ảnh đại diện</label>
					<?php echo $this->ckeditor->editor('anh',$info->anh,$config);?>
				</fieldset>
				<fieldset>
					<label>Tiêu đề (Việt)</label>
					<input type="text" name="tieude" style="width:92%" value="<?php echo $info->tieude;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung (Việt)</label>
					<?php echo $this->ckeditor->editor('noidung',$info->noidung,$config);?>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="ngaythang" id="ngaythang" value="<?php echo $info->ngaythang;?>"/>
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
		