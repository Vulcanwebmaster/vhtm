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
<form method="post" action="<?php echo base_url();?>giaovien_footer/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Tiêu đề 1 (Việt)</label>
					<input type="text" name="tieude1" style="width:92%" value="<?php echo $info->tieude1;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề 1 (Anh)</label>
					<input type="text" name="tieudee1" style="width:92%" value="<?php echo $info->tieudee1;?>"/>
				</fieldset>
				<fieldset>
					<label>Link 1</label>
					<input type="text" name="link1" style="width:92%" value="<?php echo $info->link1;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Tiêu đề 2 (Việt)</label>
					<input type="text" name="tieude2" style="width:92%" value="<?php echo $info->tieude2;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề 2 (Anh)</label>
					<input type="text" name="tieudee2" style="width:92%" value="<?php echo $info->tieudee2;?>"/>
				</fieldset>
				<fieldset>
					<label>Link 2</label>
					<input type="text" name="link2" style="width:92%" value="<?php echo $info->link2;?>"/>
				</fieldset>
				
				<fieldset>
					<label>Tiêu đề 3 (Việt)</label>
					<input type="text" name="tieude3" style="width:92%" value="<?php echo $info->tieude3;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề 3 (Anh)</label>
					<input type="text" name="tieudee3" style="width:92%" value="<?php echo $info->tieudee3;?>"/>
				</fieldset>
				<fieldset>
					<label>Link 3</label>
					<input type="text" name="link3" style="width:92%" value="<?php echo $info->link3;?>"/>
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
		