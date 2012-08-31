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
						<textarea name="content<?php echo $row->id?>" id="content<?php echo $row->id?>"><?php echo $row->content; ?></textarea>
						<?php 
						switch ($row->id) {
						    case 1:
						        echo display_ckeditor($content1); 
						        break;
						    case 2:
						        echo display_ckeditor($content2); 
						        break;
						    case 3:
						        echo display_ckeditor($content3); 
						        break;
							case 4:
						        echo display_ckeditor($content4); 
						        break;
							case 5:
						        echo display_ckeditor($content5); 
						        break;
						}						
						?>
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
