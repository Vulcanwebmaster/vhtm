<?php if (validation_errors())
{
	echo '<div class="error" style="color:red; padding-left:30px">';
	echo validation_errors('<p>','</p>');
	echo '</div>';
}?>	 
<form action="<?php echo base_url();?>faq/admin/insertNew" method="post">
		<article class="module width_full">
			<header><h3>Thêm mới</h3></header>
				<div class="module_content" style="overflow-y:auto; height:500px">		
						<fieldset>
							<label>Ngày tháng</label>
							<input type="text" name="ngaythang" value="<?php echo date('Y-m-d');?>"/>				
						</fieldset>
										
						<fieldset>
							<label>Tiêu đề</label>
							<input type="text" name="tieude"/>							
						</fieldset>
						<fieldset>
							<label>Nội dung</label>	
							<center>
								<?php echo $this->ckeditor->editor("noidung",'' ,$config);?>	
							</center>
						</fieldset>
						<fieldset>
							<label>Trả lời</label>
							<center>
								<?php echo $this->ckeditor->editor("traloi",'' ,$config);?>	
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