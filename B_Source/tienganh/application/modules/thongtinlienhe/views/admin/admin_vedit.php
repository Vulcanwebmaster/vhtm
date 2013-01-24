<?php if ($this->session->userdata('result')!='')
{
	echo '<p style="color:red; padding-left:30px">';
	echo $this->session->userdata('result');
	$this->session->unset_userdata('result');
	echo '</p>';
}?>
<!----------- Sửa tt liên hệ ----------->	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>thongtinlienhe/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Địa chỉ (Việt)</label>
					<?php echo $this->ckeditor->editor('diachi',$info->diachi,$config);?>
				</fieldset>
				<fieldset>
					<label>Địa chỉ (Anh)</label>
					<?php echo $this->ckeditor->editor('diachie',$info->diachie,$config);?>
				</fieldset>
				<fieldset>
					<label>Điện thoại</label>
					<input type="text" name="sdt" style="width:92%" value="<?php echo $info->sdt;?>"/>
				</fieldset>
				<fieldset>
					<label>Email</label>
					<input type="text" name="email" style="width:92%" value="<?php echo $info->email;?>"/>
				</fieldset>
				<fieldset>
					<label>Website</label>
					<input type="text" name="website" style="width:92%" value="<?php echo $info->website;?>"/>
				</fieldset>
				<fieldset>
					<label>Face book</label>
					<input type="text" name="linkface" style="width:92%" value="<?php echo $info->linkface;?>"/>
				</fieldset>
				<fieldset>
					<label>Twitter</label>
					<input type="text" name="twitter" style="width:92%" value="<?php echo $info->twitter;?>"/>
				</fieldset>
				<fieldset>
					<label>Zing</label>
					<input type="text" name="zingme" style="width:92%" value="<?php echo $info->zingme;?>"/>
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
		