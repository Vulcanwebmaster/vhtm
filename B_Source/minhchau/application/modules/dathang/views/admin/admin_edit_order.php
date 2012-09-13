	
		<?php 
			echo validation_errors('<div class="error">','</div>');
		?>	
<form method="post" action="<?php echo base_url();?>danhmuc/admin/edit/<?php echo $info->id;?>">	
	<article class="module width_3_quarter" style="width:95%;">
		<header><h3 class="tabs_involved"><?php echo $title;?></h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<fieldset>
					<label>Họ tên</label>
					<input type="text" name="name" style="width:92%" value="<?php echo $info->name;?>"/>
				</fieldset>
				<fieldset>
					<label>Địa chỉ</label>
					<input type="text" name="address" style="width:92%" value="<?php echo $info->address;?>"/>
				</fieldset>
				<fieldset>
					<label>Điện thoại</label>
					<input type="text" name="phone" style="width:92%" value="<?php echo $info->phone;?>"/>
				</fieldset>
				<fieldset>
					<label>Email</label>
					<input type="text" name="email" style="width:92%" value="<?php echo $info->email;?>"/>
				</fieldset>
				<fieldset>
					<label>Nội dung</label>
					<textarea name="content" style="width:92%">
						<?php echo $info->content;?>
					</textarea>
				</fieldset>
				<fieldset>
					<label>Ngày tháng</label>
					<input type="text" name="date" style="width:92%" value="<?php echo $info->date;?>"/>
				</fieldset>
			</div>
			
			<footer style="float:left">
					<div class="submit_link">
					</div>
			</footer>
		</div><!-- end of .tab_container -->
				</article><!-- end of content manager article -->	
</form>
		