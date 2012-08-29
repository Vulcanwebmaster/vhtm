<p><?php if ($this->session->userdata('giaohang-update-result'))
	echo $this->session->userdata('giaohang-update-result');
?></p>

<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<form method="post" action="<?php echo base_url();?>giaohang/admin/update">
		<div class="module_content" style="overflow-y:auto; height:500px">
				<fieldset class="fieldset-lv1">
					<fieldset>
						<label>Tiêu đề (V)</label>
						<input type="text" name="tieudev" value="<?php if ($info) echo $info->tieudev;?>"/>
					</fieldset>
					<fieldset>
						<label>Tiêu đề (E)</label>
						<input type="text" name="tieudee" value="<?php if ($info) echo $info->tieudee;?>"/>
					</fieldset>
					<fieldset>
						<label>Noi dung (V)</label>
						<center>
							<?php 
								 if ($info) $noidung=$info->noidungv;
								 else $noidung='';
								echo $this->ckeditor->editor('noidungv',$noidung,$config);?>
						</center>
					</fieldset>
					<fieldset>
						<label>Noi dung (E)</label>
						<center>
							<?php 
								 if ($info) $noidung=$info->noidunge;
								 else $noidung='';
								echo $this->ckeditor->editor('noidunge',$noidung,$config);?>
						</center>
					</fieldset>
				</fieldset>
		</div><!-- end of #tab1 -->
			
		<footer>
			<div class="submit_link">
				<input type="submit" name="submit" value="Cập nhật"	class='alt_btn'/>		
			</div>
		</footer>
	</form>	
</div><!-- end of .tab_container -->
		
</article>