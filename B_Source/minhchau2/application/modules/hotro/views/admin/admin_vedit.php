	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>hotro/admin/index/">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1">
				<fieldset>
					<label>Hỗ trợ 1</label>
					<label>Tên :</label> 
					<input type="text" name="ten1" style="width:50%" value="<?php echo $info[0]->ten;?>"/>
				</br></br>
					<label>Số điện thoại:</label>
				</br>
					<input type="text" name="sdt1" style="width:50%" value="<?php echo $info[0]->sdt;?>"/>
				</br></br>
					<label>Yahoo:</label>
				</br>
					<input type="text" name="yahoo1" style="width:50%" value="<?php echo $info[0]->yahoo;?>"/>
				</fieldset>
				<fieldset>
					<label>Hỗ trợ 2</label>
					<label>Tên: </label> 
					<input type="text" name="ten2" style="width:50%" value="<?php echo $info[1]->ten;?>"/>
				</br></br>
					<label>Số điện thoại:</label>
				</br>
					<input type="text" name="sdt2" style="width:50%" value="<?php echo $info[1]->sdt;?>"/>
				</br></br>
					<label>Yahoo:</label>
				</br>
					<input type="text" name="yahoo2" style="width:50%" value="<?php echo $info[1]->yahoo;?>"/>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
						<input type="submit" name="submit" value="Cập nhật" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article>
</form>
		