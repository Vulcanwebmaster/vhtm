<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<div class="buttons">
	<a href="http://localhost/unix/index.php/danhmuc/admin/addDanhMuc">
    <img src="http://localhost/unix/assets/icons/add.png" alt="add">    Tạo danh mục mới    </a>
</div>
<div class="buttons">
	<a href="http://localhost/unix/index.php/danhmuc/admin/addChuyenMuc">
    <img src="http://localhost/unix/assets/icons/add.png" alt="add">    Tạo chuyên mục mới    </a>
</div>

<table id="preference_form" style="padding-top:10px">
	<tr>
		<th>ID</th>
		<th>Tên chuyên mục</th>
		<th>Nội dung</th>
		<th>Loại danh mục</th>
		<th>Ngày đăng</th>
		<th>Sửa / Xóa</th>
	</tr>
<?php
	foreach($chuyenmuc as $cm)
	{
		?>
			<tr>
				<td><?php echo $cm->id; ?></td>
				<td><?php echo $cm->ten; ?></td>
				<td><?php echo $cm->noidung; ?></td>
				<td><?php echo $cm->danhmuc; ?></td>
				<td><?php echo $cm->ngaydang; ?></td>
				<td>
					<?php
						echo anchor('danhmuc/admin/editChuyenMuc/'.$cm->id,$this->bep_assets->icon('pencil'));
				        echo anchor('danhmuc/admin/deleteChuyenMuc/'.$cm->id,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$cm->id."')"));
					?>
				</td>
			</tr>
	<?php
	}
	?>
</table>

<input name = "mota_backup" id = "mota_backup" type = "hidden"/>
<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
    <?php print $this->bep_assets->icon('disk');?>
    <?php print $this->lang->line('general_save');?>
	</button>
	
    <a href="<?php echo base_url()?>index.php/admin" class="negative">
    <?php print $this->bep_assets->icon('cross');?>
    <?php print $this->lang->line('general_cancel');?>
    </a>
</div>
