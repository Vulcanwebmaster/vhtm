<form method="post" action="<?php echo base_url();?>doitac/admin/edit/<?php echo $doitac->id; ?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Sửa thông tin đối tác</h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset style="width:48%;float:left">
					<label>Tên đối tác</label>
					<input type="text" name="ten" style="width:92%" value="<?php echo $doitac->ten;?>"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Website</label>
					<input type="text" name="website" style="width:92%" value="<?php echo $doitac->website;?>"/>
				</fieldset>
				<fieldset style="width:48%;float:left">
					<label>Địa chỉ</label>
					<input type="text" name="diachi" style="width:92%" value="<?php echo $doitac->diachi;?>"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Điện thoại</label>
					<input type="text" name="dienthoai" style="width:92%" value="<?php echo $doitac->dienthoai;?>"/>
				</fieldset>
				<fieldset style="width:48%;float:left">
					<label>Fax</label>
					<input type="text" name="fax" style="width:92%" value="<?php echo $doitac->fax;?>"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Email</label>
					<input type="text" name="email" style="width:92%" value="<?php echo $doitac->email;?>"/>
				</fieldset>	
				<fieldset style="width:48%">
					<label>Loại đối tác</label>
					<select name="loaidoitac">
						<option value="thoitrang">Thương mại thời trang</option>
						<option value="bakery">Thương mại bakery</option>
						<option value="duhoc">Đối tác du học</option>
					</select>
				</fieldset>			
			</div>
			
			<footer style="float:left">
					
					<div class="submit_link">
						<input type="submit" name="submit" value="Update" class="alt_btn">
					</div>
			</footer>
				
			
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>