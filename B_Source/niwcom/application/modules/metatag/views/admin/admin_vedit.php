	<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>metatag/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			<?php if ($this->session->userdata('result')!='')
						{
						echo '<p style="color:red; padding-left:30px">';
						echo $this->session->userdata('result');
						$this->session->unset_userdata('result');
						echo '</p>';
						}?>
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Meta Trang chủ</label>
					<input type="text" name="meta_home" style="width:92%" value="<?php echo $info->meta_home;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Meta Giới thiệu</label>
					<input type="text" name="meta_gioithieu" style="width:92%" value="<?php echo $info->meta_gioithieu;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Meta Dịch vụ</label>
					<input type="text" name="meta_dichvu" style="width:92%" value="<?php echo $info->meta_dichvu;?>"/>
				</fieldset>
				<fieldset>
					<label>Meta Sản phẩm</label>
					<input type="text" name="meta_sanpham" style="width:92%" value="<?php echo $info->meta_sanpham;?>"/>
				</fieldset>
				<fieldset>
					<label>Meta Tin tức</label>
					<input type="text" name="meta_tintuc" style="width:92%" value="<?php echo $info->meta_tintuc;?>"/>
				</fieldset>
				<fieldset>
					<label>Meta Liên hệ</label>
					<input type="text" name="meta_lienhe" style="width:92%" value="<?php echo $info->meta_lienhe;?>"/>
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
		