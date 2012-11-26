<article class="module width_full">
	<header><h3><?php echo $title; ?></h3></header>
		<div class="module_content">
				<fieldset style="width:48%;float:left">
					<label>Tên</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->name; ?>"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Email</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->email; ?>"/>
				</fieldset>
				<fieldset style="width:48%;float:left">
					<label>Điện thoại</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->phone; ?>"/>
				</fieldset>
				<fieldset style="width:48%;float:right">
					<label>Mã đơn hàng</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->ordercode; ?>"/>
				</fieldset>
				<fieldset style="width:48%">
					<label>Mã RMA</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->rmacode; ?>"/>
				</fieldset>
				<fieldset">
					<label>Nội dung</label>
					<?php echo $this->ckeditor->editor('',$query->detail,$config);?>
				</fieldset>
				<div class="clear"></div>
		</div>
</article><!-- end of post new article -->
