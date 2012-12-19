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
							<input type="text" name="product_name" style="width:92%"/>
						</fieldset>
						<fieldset>
					<label>Loại sản phẩm</label>
					<select name="category_name">
						
						<?php  foreach ($list as $item)
					 	{      ?>
						<option value="<?php echo $item->category_id;?>"><?php echo $item->category_name;?></option>
						
						<?php } ?>
					</select>
					
					
				</fieldset>
						<fieldset>
							<label>Mô tả</label>
							<?php echo $this->ckeditor->editor('discription','',$config);?>
						</fieldset>
						
					</div>
					
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
	</article>
</form>