<?php 
	$title = array(
		1 => "Điều khoản và Điều kiện sử dụng",
		2 => "Điều khoản và Điều kiện bán hàng",
		3 => "Chính sách trả lại",
		4 => "Chính sách bảo mật",
		5 => "Thông tin về bảo mật",
	);
?>
<form action="<?php echo base_url()?>policy/admin/updatePolicy" method="post">
	<article class="module width_full" style="width:95%;">
		<header><h3>Chính sách</h3></header>			
			<div class="module_content">
				<?php  foreach ($policy as $row) { ?>
					<fieldset style="width:100%; float:left;">
						<label style="width:100%"><?php echo $title[$row->id]?></label>
						<?php echo $this->ckeditor->editor('content'.$row->id,$row->content,$config);?>
					</fieldset><div class="clear"></div>
				<?php } ?>				
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Cập nhật" class="alt_btn">
				</div>
			</footer>
		</article><!-- end of post new article -->
</form>	
