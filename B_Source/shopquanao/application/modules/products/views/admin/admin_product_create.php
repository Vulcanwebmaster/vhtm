<h2><?php echo $title;?></h2>
<?php
echo form_open_multipart($module.'/admin/create')."\n";
echo '*= Bắt buộc';
echo "\n<table id='preference_form'><tr><td class='label'><label for='category'>".'Loại sản phẩm:'."</label></td>\n";
echo "<td>";
echo form_dropdown('category_id',$categories);
echo "</td></tr>\n";
?>

<?php foreach($listkho as $kho)
{?>
	<tr>
		<td>
			<strong>Kho: </strong>
		</td>
		<td>
			<?php echo $kho->kho_name;?>
			<input name="kho1" id="kho1" style="" value="0" type="text" />
		</td>
	</tr>
<?php }?>
<!-- tr>
	<td>
		<strong>Kho: </strong>
	</td>
	<td>
		Kho 1
		<input name="kho1" id="kho1" style="" value="0" type="text" />
	</td>
</tr>
<tr>
	<td>
	</td>
	<td>
		Kho 2
		<input name="kho2" id="kho2" style="" value="0" type="text" />
	</td>
</tr>
<tr>
	<td>
	</td>
	<td>
		Kho 3
		<input name="kho3" id="kho3" style="" value="0" type="text" />
	</td>
</tr-->
<?php
echo "<tr><td class='label'><label for='pname'>".'*'.'Tên hàng:'."</label></td>\n";
$data = array('name'=>'name','id'=>'pname','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='mahang'>".'*'.'Mã hàng:'."</label></td>\n";
$data = array('name'=>'code','id'=>'code','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='short'>".'Mô tả sản phẩm:'."</label></td>\n";
$data = array('name'=>'shortdesc','id'=>'short','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Mô tả chi tiết sản phẩm:'."</label></td>\n";
$data = array('name'=>'longdesc','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;

?>
<!--<tr>
<td id="nopad">
<span id="uimage_parent" class="mceEditor defaultSkin"></span>
<table id="uimage_tbl" class="mceLayout" cellpadding="0" cellspacing="0" style="width: 272px; height: 166px; ">
<tbody>
<tr class="mceFirst">
<td class="mceToolbar mceLeft mceFirst mceLast">

<table id="uimage_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<a id="" href="javascript:;" class="mceButton mceButtonEnabled mce_image" onmousedown="return false;" onclick="return false;" title="Insert/edit image">
<span class="mceIcon mce_image"> 
</span>
</a>
</td>
</tr>
</tbody>
</table>

</td>
</tr>
</tbody>
</table>
</td>
</tr>


--><?php
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='uimage'>".'Chọn ảnh sản phẩm:'."</label></td>\n";
$data = array('name'=>'image','id'=>'uimage','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='uthumb'>".'Chọn thumnail sản phẩm:'."</label></td>\n";
$data = array('name'=>'thumbnail','id'=>'uthumb','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='status'>".'Trạng thái'."</label></td>\n";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo "<td>";
echo form_dropdown('status',$options);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='price'>".'Giá tiền'."</label></td>\n";
$data = array('name'=>'price','id'=>'price','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='featured'>".'Đặc điểm:'."</label></td>\n";
$options = array('none' => 'None', 'quicksand' => 'Quicksand');// you can add more here as you wish
echo "<td>";
echo form_dropdown('featured',$options);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='other_feature'>".'Đặc điểm khác'."</label></td>\n";
$options = array('none' => 'None', 'most sold' => 'Most sold', 'new product' => 'New Product');
echo "<td>";
echo form_dropdown('other_feature',$options);
echo "</td></tr></table>\n";

echo form_hidden('lang_id', '0');
echo form_hidden('table_id', '0');
?>
<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
    <?php print $this->bep_assets->icon('disk');?>
    <?php print $this->lang->line('general_save');?>
    </button>

    <a href="<?php print site_url($cancel_link);?>" class="negative">
    <?php print $this->bep_assets->icon('cross');?>
    <?php print $this->lang->line('general_cancel');?>
    </a>
</div>
<?php
//echo form_submit('submit',$this->lang->line('kago_create_product'));
echo form_close();
?>
