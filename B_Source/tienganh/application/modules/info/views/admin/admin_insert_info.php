	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>info/admin/insert">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên thông tin (Việt)</label>
					<input type="text" name="info_name" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Nội dung (Anh)</label>
					<input type="text" name="info_content" style="width:92%"/>
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
		