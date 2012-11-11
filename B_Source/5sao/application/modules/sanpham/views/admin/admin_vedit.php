	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>sanpham/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tên (Việt)</label>
					<input type="text" name="ten_v" style="width:92%" value="<?php echo $info->ten_v;?>"/>
				</fieldset>
				<fieldset>
					<label>Tên (Anh)</label>
					<input type="text" name="ten_e" style="width:92%" value="<?php echo $info->ten_e;?>"/>
				</fieldset>
				<fieldset>
					<label>Model</label>
					<input type="text" name="model" style="width:92%" value="<?php echo $info->model;?>"/>
				</fieldset>
				<fieldset>
					<label>Hãng sx</label>
					<input type="text" name="hangsx" style="width:92%" value="<?php echo $info->hangsx;?>"/>
				</fieldset>
				<fieldset>
					<label>Bảo hành</label>
					<input type="text" name="baohanh" style="width:92%" value="<?php echo $info->baohanh;?>"/>
				</fieldset>
				<fieldset>
					<label>Kho hàng</label>
					<input type="text" name="khohang" style="width:92%" value="<?php echo $info->khohang;?>"/>
				</fieldset>
				<fieldset>
					<label>Giá bán</label>
					<input type="text" name="giaban" style="width:92%" value="<?php echo $info->giaban;?>"/>
				</fieldset>
				<fieldset>
				<label>Model(Anh)</label>
					<input type="text" name="modele" style="width:92%" value="<?php echo $info->model;?>"/>
				</fieldset>
				<fieldset>
					<label>Hãng sx(Anh)</label>
					<input type="text" name="hangsxe" style="width:92%" value="<?php echo $info->hangsx;?>"/>
				</fieldset>
				<fieldset>
					<label>Bảo hành(Anh)</label>
					<input type="text" name="baohanhe" style="width:92%" value="<?php echo $info->baohanh;?>"/>
				</fieldset>
				<fieldset>
					<label>Kho hàng(Anh)</label>
					<input type="text" name="khohange" style="width:92%" value="<?php echo $info->khohang;?>"/>
				</fieldset>
				<fieldset>
					<label>Giá bán(Anh)</label>
					<input type="text" name="giabane" style="width:92%" value="<?php echo $info->giaban;?>"/>
				</fieldset>

				<fieldset>
					<label>Chi tiết (Việt)</label>
					<?php echo $this->ckeditor->editor('chitiet_v',$info->chitiet_v,$config);?>
				</fieldset>
				<fieldset>
					<label>Chi tiết (Anh)</label>
					<?php echo $this->ckeditor->editor('chitiet_e',$info->chitiet_e,$config);?>
				</fieldset>
				<fieldset>
					<label>Hình ảnh</label>
					<?php echo $this->ckeditor->editor('hinhanh',$info->hinhanh,$config);?>
				</fieldset>
				<fieldset>
					<label>Danh mục</label>
					<select name="danhmuc_id">
						<?php foreach ($listCategories as $category)
						{
							if ($category->id==$info->danhmuc_id)
							{?>
							<option selected="selected" value="<?php echo $category->id;?>"><?php echo $category->ten_v;?></option>
						<?php }
							else{
							?>
							<option value="<?php echo $category->id;?>"><?php echo $category->ten_v;?></option>
						<?php }
							}?>
					</select>
				</fieldset>
				<fieldset>
					<label>Sản phẩm mới</label>
					<select name="moi">
						<?php if ($info->moi=="0")
						{?>
							<option value="0" selected="selected">Không</option>
							<option value="1">Có</option>
						<?php }
						else { ?>
							<option value="0">Không</option>
							<option value="1" selected="selected">Có</option>
						<?php }?>
					</select>
				</fieldset>
				<fieldset>
					<label>Sản phẩm bán chạy</label>
					<select name="banchay">
						<?php if ($info->banchay=="0")
						{?>
							<option value="0" selected="selected">Không</option>
							<option value="1">Có</option>
						<?php }
						else { ?>
							<option value="0">Không</option>
							<option value="1" selected="selected">Có</option>
						<?php }?>
					</select>
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
		