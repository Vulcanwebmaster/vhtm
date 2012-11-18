	
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
					<label>Tên (Việt)</label>
					<input type="text" name="namev" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Tên (Anh)</label>
					<input type="text" name="namee" style="width:92%"/>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="category_id">
						<option></option>
						<?php foreach ($list as $item)
						{?>
							<option value="<?php echo $item->id?>"><?php echo $item->namev;?></option>							
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Model</label>
					<input type="text" name="model" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Hãng sản xuất</label>
					<input type="text" name="hangsx" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Bảo hành</label>
					<input type="text" name="baohanh" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Kho hàng</label>
					<input type="text" name="khohang" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Giá (VNĐ)</label>
					<input type="text" name="price" style="width:95%"/>
				</fieldset>
				<fieldset>
					<label>Chức năng (Việt)</label>
					<?php echo $this->ckeditor->editor('usesv','',$config);?>
				</fieldset>
				<fieldset>
					<label>Chức năng (Anh)</label>
					<?php echo $this->ckeditor->editor('usese','',$config);?>
				</fieldset>
				<fieldset>
					<label>Thông tin kỹ thuật (Việt)</label>
					<?php echo $this->ckeditor->editor('technical_infov','',$config);?>
				</fieldset>
				<fieldset>
					<label>Thông tin kỹ thuật (Anh)</label>
					<?php echo $this->ckeditor->editor('technical_infoe','',$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('image','',$config);?>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="is_new">
						<option value="1" selected="selected">Có</option>
						<option value="0">Không</option>
					</select>
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
		