	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>doitac/admin/add">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved">Thêm đối tác</h3>
		
		</header>
		<div class="tab_container">
			
			<div id="tab1" class="tab_content">
				<fieldset style="width:48%;float:left">
					<label>Tên đối tác</label>
					<input type="text" name="ten" style="width:92%"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Website</label>
					<input type="text" name="website" style="width:92%"/>
				</fieldset>
				<fieldset style="width:48%;float:left">
					<label>Địa chỉ</label>
					<input type="text" name="diachi" style="width:92%"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Điện thoại</label>
					<input type="text" name="dienthoai" style="width:92%"/>
				</fieldset>
				<fieldset style="width:48%;float:left">
					<label>Fax</label>
					<input type="text" name="fax" style="width:92%"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Email</label>
					<input type="text" name="email" style="width:92%"/>
				</fieldset>	
				<fieldset style="width:48%">
					<label>Loại đối tác</label>
					<select name="loaidoitac">
						<option value="thoitrang">Thương mại thời trang</option>
						<option value="bakery">Thương mại bakery</option>
						<option value="duhoc">Du học</option>
					</select>
				</fieldset>		
			</div>
			
			<footer style="float:left">
					
					<div class="submit_link">
						<input type="submit" name="submit" value="Insert" class="alt_btn">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		