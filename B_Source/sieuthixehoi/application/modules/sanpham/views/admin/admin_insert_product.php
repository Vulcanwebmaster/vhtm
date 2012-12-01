	
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
					<label>Tên</label>
					<input type="text" name="namev" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Dòng xe</label>
					<select name="category_id">
						<option></option>
						<?php foreach ($list as $item)
						{?>
							<option value="<?php echo $item->id?>"><?php echo $item->namev;?></option>							
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Hãng sản xuất</label>
					<input type="text" name="hangsx" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Tên Hãng</label>
					<select name="parent_id">
						<option value="2">HYUNDAI</option>
						<option value="1">CHEVROLET</option>
					</select>
				</fieldset>
				<fieldset>
					<label>Giá (VNĐ)</label>
					<input type="text" name="price" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Mô tả</label>
					<?php echo $this->ckeditor->editor('mota','',$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('image','',$config);?>
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
		