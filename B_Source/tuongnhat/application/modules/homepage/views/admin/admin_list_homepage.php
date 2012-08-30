<p><?php if ($this->session->userdata('homepage-update-result'))
	echo $this->session->userdata('homepage-update-result');
?></p>

<article class="module width_3_quarter" style="width: 95%;">
<header>
	<h3 class="tabs_involved"><?php if (isset($bcCurrent)) echo $bcCurrent;?></h3>
	<ul class="tabs"></ul>
</header>

<div class="tab_container">
	<form method="post" action="<?php echo base_url();?>homepage/admin/update">
		<div class="module_content" style="overflow-y:auto; height:500px">
			
				<fieldset class="fieldset-lv1">
					<legend>Cột 1</legend>
					<fieldset>
						<label>Tiêu đề (V)</label>
						<input type="text" name="tenv1" value="<?php echo $column1->tenv;?>"/>
					</fieldset>
					<fieldset>
						<label>Tiêu đề (E)</label>
						<input type="text" name="tene1" value="<?php echo $column1->tene;?>"/>
					</fieldset>
					<fieldset>
						<label>Nội dung (V)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidungv1',$column1->noidungv,$config);?>
						</center>
					</fieldset>
					<fieldset>
						<label>Nội dung (E)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidunge1',$column1->noidunge,$config);?>
						</center>
					</fieldset>
				</fieldset>
				
				<fieldset class="fieldset-lv1">
					<legend>Cột 2</legend>
					<fieldset>
						<label>Tiêu đề (V)</label>
						<input type="text" name="tenv2" value="<?php echo $column2->tenv;?>"/>
					</fieldset>
					<fieldset>
						<label>Tiêu đề (E)</label>
						<input type="text" name="tene2" value="<?php echo $column2->tene;?>"/>
					</fieldset>
					<fieldset>
						<label>Nội dung (V)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidungv2',$column2->noidungv,$config);?>
						</center>
					</fieldset>
					<fieldset>
						<label>Nội dung (E)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidunge2',$column2->noidunge,$config);?>
						</center>
					</fieldset>
				</fieldset>
				
				<fieldset class="fieldset-lv1">
					<legend>Cột 3</legend>
					<fieldset>
						<label>Tiêu đề (V)</label>
						<input type="text" name="tenv3" value="<?php echo $column3->tenv;?>"/>
					</fieldset>
					<fieldset>
						<label>Tiêu đề (E)</label>
						<input type="text" name="tene3" value="<?php echo $column3->tene;?>"/>
					</fieldset>
					<fieldset>
						<label>Nội dung (V)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidungv3',$column3->noidungv,$config);?>
						</center>
					</fieldset>
					<fieldset>
						<label>Nội dung (E)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidunge3',$column3->noidunge,$config);?>
						</center>
					</fieldset>
				</fieldset>
				
				<fieldset class="fieldset-lv1">
					<legend>Cột 4</legend>
					<fieldset>
						<label>Tiêu đề (V)</label>
						<input type="text" name="tenv4" value="<?php echo $column4->tenv;?>"/>
					</fieldset>
					<fieldset>
						<label>Tiêu đề (E)</label>
						<input type="text" name="tene4" value="<?php echo $column4->tene;?>"/>
					</fieldset>
					<fieldset>
						<label>Nội dung (V)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidungv4',$column4->noidungv,$config);?>
						</center>
					</fieldset>
					<fieldset>
						<label>Nội dung (E)</label>
						<center>
							<?php echo $this->ckeditor->editor('noidunge4',$column4->noidunge,$config);?>
						</center>
					</fieldset>
				</fieldset>
			
		</div><!-- end of #tab1 -->
			
		<footer>
			<div class="submit_link">
				<?php echo $this->pagination->create_links();?>	
				<input type="submit" name="submit" value="Cập nhật"	class='alt_btn'/>		
			</div>
		</footer>
	</form>	
</div><!-- end of .tab_container -->
		
</article>