<h2><?php echo $title;?></h2>
<?php
if ($this->session->flashdata('message'))
{
	echo "<div class='status_box'>".$this->session->flashdata('message')."</div>";
}

if (count($orderdetails))
{	
	echo '<table id="tablesorter_product" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
	echo "<thead>\n<tr valign='top'>\n";
	echo "<th>&nbsp;</th><th>ID Đặt hàng</th>\n<th>Tên Sản Phẩm</th><th>Số lượng</th><th>Giá tiền</th><th>Thực hiện</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach ($orderdetails as $key => $list)
	{
		echo "<tr valign='top'>\n";
		echo "<td align='center'>".form_checkbox('p_id[]',$list['order_id'],FALSE)."</td>";
		echo "<td align='center'>".$list['order_id']."</td>\n";
		echo "<td align='center'>".$list['name']."</td>\n";
		echo "<td align='center'>".$list['quantity']."</td>\n";
		echo "<td align='center'>".$list['price']."</td>\n";
		echo "<td align='center'>";
		echo anchor('orders/admin/deleteitem/'.$list['order_id'].'/'.$list['order_item_id'],'delete');
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody></table>";
	echo form_close();
}
?>