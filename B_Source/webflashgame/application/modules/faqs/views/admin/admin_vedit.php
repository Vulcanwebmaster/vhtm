	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
		
<script type="text/javascript">
	$(function() {
		$( "#ngaythang" ).datepicker();
	});
</script>
		
<form method="post" action="<?php echo base_url();?>faqs/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				
				<fieldset>
					<label>Title (en) </label>
					<input type="text" name="title" style="width:92%" value="<?php echo $info->title;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Title (fr) </label>
					<input type="text" name="titlefr" style="width:92%" value="<?php echo $info->titlefr;?>"/>
				</fieldset>
				<fieldset>
					<label>Content (en)</label>
					<?php echo $this->ckeditor->editor('content',$info->content,$config);?>
				</fieldset>
				<fieldset>
					<label>Content (fr) </label>
					<?php echo $this->ckeditor->editor('contentfr',$info->contentfr,$config);?>
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
		