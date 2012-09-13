<div id="main_block">
	<form action="" method="post">
		<table>
			<tr>
				<td><?php echo $this->lang->line('order-name');?></td>
				<td><input name="name"/></td>
			</tr>
			<tr>
				<td><?php echo $this->lang->line('order-address');?></td>
				<td><input name="address"/></td>
			</tr>
			<tr>
				<td><?php echo $this->lang->line('order-phone');?></td>
				<td><input name="phone"/></td>
			</tr>
			<tr>
				<td><?php echo $this->lang->line('order-email');?></td>
				<td><input name="email"/></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="<?php echo $this->lang->line('order-order');?>"/>
				</td>
			</tr>
		</table>
	</form>
</div>