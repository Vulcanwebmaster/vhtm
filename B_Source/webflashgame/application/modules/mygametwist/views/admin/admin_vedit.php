	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>helps/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Tiêu đề </label>
					<input type="text" name="title" style="width:92%" value="<?php echo $info->title;?>"/>
				</fieldset>
				<fieldset>
					<label>Mục helps</label>
					<select name="type">
						<option value="Rules">Rules</option>
						<option value="FAQs">FAQs</option>
						<option value="General Help">General Help</option>
						<option value="Technical Help">Technical Help</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Mô tả </label>
					<?php echo $this->ckeditor->editor('description',$info->description,$config);?>
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
		