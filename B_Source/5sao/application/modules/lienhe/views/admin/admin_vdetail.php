<form method="post">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Họ tên</label>
					<input type="text" name="hoten" style="width:92%" value="<?php echo $info->hoten;?>"/>
				</fieldset>
				<fieldset>
					<label>Email</label>
					<input type="text" name="email" style="width:92%" value="<?php echo $info->email;?>"/>
				</fieldset>
				<fieldset>
					<label>Điện thoại</label>
					<input type="text" name="dienthoai" style="width:92%" value="<?php echo $info->dienthoai;?>"/>
				</fieldset>
				<fieldset>
					<label>Tiêu đề</label>
					<input type="text" name="tieude" style="width:92%" value="<?php echo $info->tieude;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung</label>
					<textarea style="width:92%; height:100px"><?php echo $info->noidung;?></textarea>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="ngaythang" style="width:92%" value="<?php echo $info->ngaythang;?>"/>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		