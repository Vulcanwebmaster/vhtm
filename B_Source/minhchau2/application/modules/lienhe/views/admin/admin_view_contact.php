<article class="module width_full">
	<header><h3><?php echo $title; ?></h3></header>
		<div class="module_content">
				<fieldset >
					<label>Tên</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->name; ?>"/>
				</fieldset>
				<fieldset >
					<label>Email</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->email; ?>"/>
				</fieldset>
				<fieldset >
					<label>Điện thoại</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->phone; ?>"/>
				</fieldset>
				<fieldset >
					<label>Mã đơn hàng</label>
					<input type="text" style="width:92%;margin-left:10px" class="text" value="<?php echo $query->ordercode; ?>"/>
				</fieldset>
				<fieldset >
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
