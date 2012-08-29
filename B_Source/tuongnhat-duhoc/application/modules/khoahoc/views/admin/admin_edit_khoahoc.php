<form method="post" action="<?php echo base_url();?>index.php/khoahoc/admin/edit/<?php echo $khoahoc->id; ?>">
<article class="module width_full" style="width:95%;">
	<header>
		<h3 class="tabs_involved"><?php echo $bcCurrent; ?></h3>
	</header>
	<div class="module_content">
			<span style="font-weight: bold;font-size: 14px;color:red">
			<?php echo form_error('ten');?>
			</span>
			<fieldset style="width:48%;">
				<label>Tên khóa học : </label>
				<input value="<?php echo $khoahoc->ten; ?>" type="text" name="ten" style="width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;">
				<label>Loại khóa học : </label>
				<select name="loaikhoahoc" style="padding-left:5px;width:94%;height:30px;font-weight: bold">
					<?php foreach($query as $row)
					{
						?>
							<option value="<?php echo $row->ten; ?>"><?php echo $row->ten;?></option>
						<?php 
					}
					?>
				</select>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:right;margin-top:-169px">
				<label>Học phí : </label>
				<input value="<?php echo $khoahoc->hocphi; ?>" type="text" name="hocphi" style="width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
			<fieldset>
				<label>Nội dung : </label>
				<textarea name="noidung" id="content"><?php echo $khoahoc->noidung;?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
			</fieldset><div class="clear"></div>
			
	</div>
			<footer>	
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật khóa học" class="alt_btn">
					</div>
			</footer>
</article>
</form>