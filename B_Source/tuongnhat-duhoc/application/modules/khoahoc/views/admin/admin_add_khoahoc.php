<form method="post" action="<?php echo base_url();?>index.php/khoahoc/admin/add">
<article class="module width_full" style="width:95%;">
	<header>
		<h3 class="tabs_involved"><?php echo $bcCurrent; ?></h3>
	</header>
	<div class="module_content">
			<span style="font-weight: bold;font-size: 14px;color:red">
			<?php echo form_error('ten');?>
			</span>
			
			<fieldset style="width:48%;float:left">
				<label>Tên khóa học : </label>
				<input type="text" name="ten" style="color:blue;width:92%;height:30px;font-weight: bold"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;">
				<label>Loại khóa học : </label>
				<select name="loaikhoahoc" style="color:blue;padding-left:5px;width:94%;height:30px;font-weight: bold">
					<?php foreach($query as $row)
					{
						?>
							<option style="color:blue;font-weight: bold" value="<?php echo $row->ten; ?>"><?php echo $row->ten;?></option>
						<?php 
					}
					?>
				</select>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:right;margin-top:-179px">
				<label>Học phí : </label>
				<input type="text" name="hocphi" style="color:blue;float:left;width:70%;height:30px;font-weight: bold"/>
				<select name="tiente" style="color:blue;float:right;width:17%;height:30px;font-weight: bold"/>
					<?php foreach($tiente as $tien)
					{
						?>
							<option style="color:blue;font-weight: bold" value="<?php echo $tien->ten; ?>"><?php echo $tien->ten;?></option>
						<?php 
					}
					?>
				</select>
			</fieldset><div class="clear"></div>
			
			<fieldset>
				<label>Nội dung khóa học: </label>
				<textarea name="noidung" id="content" ></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
			</fieldset>
		
		</div>
			<footer>	
					<div class="submit_link">
						<input type="submit" name="submit" value="Thêm khóa học" class="alt_btn">
					</div>
			</footer>
</article>
</form>