<h2><?php echo $title;?></h2>
<div class="clearboth">&nbsp;</div>
<div>
<?php 
echo form_open_multipart($module.'/admin/update')."\n";
echo '*= Bắt buộc'."<br>".'+ Nếu số lượng sản phẩm còn lại trong kho nhỏ hơn số lượng sản phẩm đã bán được nhập thì số lượng sản phầm của kho sẽ bằng 0';
echo "<br>";
echo "+ Nếu lựa chọn tất cả các kho thì sẽ tiến hành trừ dần số lượng sản phầm trong kho theo thứ tự id của kho";
echo "<br>";
echo "Ví dụ: Nhập vào số lượng sản phẩm đã bán là 5 và chọn tất cả các kho, kho 1 có 4 sản phẩm, kho 2 có 2 sản phẩm thì sau";
echo "<br>";
echo "khi cập nhật số lượng sản phẩm của kho 1 là 0 sản phẩm, kho 2 là 1 sản phẩm.";
echo "<br>";
echo '<table id="tablesorter1" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
echo "<thead><tr valign='top'>";
echo "<th>".'*Mã sản phẩm</th><th>'.'Sản phẩm tại kho</th><th>'."*Số lượng đã bán</th></tr></thead><tbody>";
for ($i = 1; $i <= 10; $i++)
{
	$data = array('name'=>'code'.$i,'id'=>'code'.$i,'class'=>'text');
	echo "<tr><td>";
	echo form_input($data);
	echo "</td>\n";
	echo '<td><select name = "giatrikho'.$i.'">';
	echo "<option value=\"-1\"";
	echo ">Tất cả các kho</option>";
	if (count($warehouse))
		{
			foreach ($warehouse as $key => $list)
			{
				echo "<option value=\"".$list['kho_id']."\"";
				echo ">".$list['kho_name']."</option>";
			}
		}
	echo "</select></td>";
	$data = array('name'=>'soluong'.$i,'id'=>'soluong'.$i,'class'=>'text');
	echo "<td>";
	echo form_input($data);
	echo "</td></tr>\n";
}
echo "</tbody>";
echo "</table>";
?>
<input type="submit" value="Cập nhật" />	
<?php
echo form_close();
?>
</div>
