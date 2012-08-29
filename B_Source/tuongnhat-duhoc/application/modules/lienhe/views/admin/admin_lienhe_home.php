<form method="post" action="<?php echo base_url();?>lienhe/admin/edit/<?php echo $lienhe->id; ?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Sửa thông tin giới thiệu</h3>

		</header>
		<div class="module_content">
			<fieldset style="width:48%;float:left;">
				<label>Tên công ty : </label>
				<input type="text" name="ten" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->ten;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:left">
				<label>Địa chỉ : </label>
				<input type="text" name="diachi" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->diachi;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:left">
				<label>Telephone : </label>
				<input type="text" name="tel" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->telephone;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:right;margin-top:-279px">
				<label>Mobile phone : </label>
				<input type="text" name="mob" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->mobile;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:right;margin-top:-182px">
				<label>Fax : </label>
				<input type="text" name="fax" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->fax;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:right;margin-top:-87px">
				<label>Website : </label>
				<input type="text" name="website" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->website;?>"/>
			</fieldset><div class="clear"></div>
			
			<fieldset style="width:48%;float:left">
				<label>Email : </label>
				<input type="text" name="email" style="width:92%;height:30px;color:blue" value="<?php echo $lienhe->email;?>"/>
			</fieldset><div class="clear"></div>	
							
		</div>
		
			
			<footer style="float:left">
					
					<div class="submit_link">
						<input type="submit" name="submit" value="Update" class="alt_btn">
					</div>
			</footer>

				</article><!-- end of content manager article -->	
</form>