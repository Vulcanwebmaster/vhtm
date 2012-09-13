<style>
	td{padding:5px}
	input, textarea{background-color:#f9f9f9 !important}
</style>
<div id="main_block">
	<?php if (validation_errors())
	{
		echo '<div class="error">';
		echo validation_errors('<p>','</p>');
		echo '</div>';
	}?>
	<form action="<?php echo base_url();?>dathang/dat" method="post" style="text-align:center">
		<center>
			<table>
				<tr>
					<td><?php echo $this->lang->line('order-ten');?></td>
					<td><input name="name" type="text" style="width:300px"/></td>
				</tr>
				<tr>
					<td><?php echo $this->lang->line('order-diachi');?></td>
					<td><input name="address" type="text" style="width:300px"/></td>
				</tr>
				<tr>
					<td><?php echo $this->lang->line('order-dt');?></td>
					<td><input name="phone" type="text" style="width:300px"/></td>
				</tr>
				<tr>
					<td><?php echo $this->lang->line('order-email');?></td>
					<td><input name="email" type="text" style="width:300px"/></td>
				</tr>
				<tr>
					<td style="vertical-align:top"><?php echo $this->lang->line('order-noidung');?></td>
					<td><textarea name="content" style="width:300px; height:150px"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<input type="submit" value="<?php echo $this->lang->line('order-dathang');?>"/>
					</td>
				</tr>
			</table>
		</center>
	</form>
</div>