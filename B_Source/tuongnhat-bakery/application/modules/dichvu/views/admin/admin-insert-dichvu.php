<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	 
<form action="<?php echo base_url();?>dichvu/admin/insertNew" method="post">
		<article class="module width_full">
			<header><h3>Chỉnh sửa</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">		
						<fieldset>
							<label>Ngày tháng</label>
							<input type="text" name="ngaythang" value="<?php echo date('Y-m-d');?>"/>				
						</fieldset>
										
						<fieldset>
							<label>Tiêu đề (V)</label>
							<input type="text" name="tieudev"/>							
						</fieldset>
						<fieldset>
							<label>Tiêu đề (E)</label>
							<input type="text" name="tieudee"/>							
						</fieldset>						
						<fieldset>
							<label>Nội dung (V)</label>	
							<center>
								<?php echo $this->ckeditor->editor("noidungv",'' ,$config);?>	
							</center>
						</fieldset>
						<fieldset>
							<label>Nội dung (E)</label>
							<center>
								<?php echo $this->ckeditor->editor("noidunge",'' ,$config);?>	
							</center>
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Post" class="alt_btn">
					
				</div>
			</footer>
		</article><!-- end of post new article -->
		</form>