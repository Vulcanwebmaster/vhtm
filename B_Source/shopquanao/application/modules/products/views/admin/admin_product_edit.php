<h2><?php echo $title;?></h2>
<?php

if($product['lang_id']=='0' AND $multilang){
    echo showtranslang($languages,$translanguages,$product, $module);
}

echo form_open_multipart('products/admin/edit/'.$product['id']);

echo "\n<table id='preference_form'><tr><td class='label'><label for='category'>".'Loại sản phẩm:'."</label></td>\n";
echo "<td>";
echo form_dropdown('category_id',$categories,$product['category_id']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='pname'>".'*'.'Tên hàng:'."</label></td>\n";
$data = array('name'=>'name','id'=>'pname','class'=>'text','value'=>$product['name'] );
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='mahang'>".'*'.'Mã hàng:'."</label></td>\n";
$data = array('name'=>'code','id'=>'code','class'=>'text','value'=>$product['code']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";
?>
<?php 
foreach($listkho as $kho)
{	
	$quantity = 0;
	if (count($soluong))
	{
		foreach($soluong as $key => $list)
		{
			if($list['kho_id'] == $kho->kho_id)
			{
				$quantity = $list['total'];
			}
		};
	}
?>
	<tr>
		<td>
			<strong>Kho: </strong>
		</td>
		<td>
			<span style="width:50px; float:left; padding-top:2px"><?php echo $kho->kho_name;?></span>
			<input name="kho_<?php echo $kho->kho_id;?>" id="kho_<?php echo $kho->kho_id;?>" style="float:left" value="<?php echo $quantity;?>" type="text" />
		</td>
	</tr>
<?php }?>
<?php 	
echo "<tr><td class='label'><label for='short'>".'Mã số chi tiết sản phẩm:'."</label></td>\n";
$data = array('name'=>'shortdesc','id'=>'short','class'=>'text','value'=>$product['shortdesc']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Mã số chi tiết sản phẩm:'."</label></td>\n";
$data = array('name'=>'longdesc','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$product['longdesc']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "</td></tr>\n";

echo "<tr><td class='label'><label for='uimage'>".'Chỉnh thumbnail sản phẩm:'."</label></td>\n";
$data = array('name'=>'image','id'=>'uimage','rows'=>'10', 'cols'=>'80','value'=>$product['image']);
echo "<td id='nopad' >";
echo form_textarea($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='uthumb'>".'Chỉnh thumbnail sản phẩm:'."</label></td>\n";
$data = array('name'=>'thumbnail','id'=>'uthumb','rows'=>'10', 'cols'=>'80','value'=>$product['thumbnail']);
echo "<td id='nopad' >";
echo form_textarea($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='status'>".'Trạng thái:'."</label></td>\n";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo "<td>";
echo form_dropdown('status',$options,$product['status']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='price'>".'Giải thích:'."</label></td>\n";
$data = array('name'=>'price','id'=>'price','class'=>'text','value'=>$product['price']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='featured'>".'Đặc điểm:'."</label></td>\n";
$options = array('none' => 'none', 'quicksand' => 'Quicksand');// you can add more here as you wish
echo "<td>";
echo form_dropdown('featured',$options,$product['featured']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='other_feature'>".'Đặc điểm khác:'."</label></td>\n";
$options = array('none' => 'none', 'most sold' => 'Most sold', 'new product' => 'New Product');
echo "<td>";
echo form_dropdown('other_feature',$options,$product['other_feature']);
echo "</td></tr></table>\n";

echo form_hidden('lang_id',$product['lang_id']);
//echo form_hidden('table_id',$product['table_id']);
echo form_hidden('id',$product['id']);

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
//echo form_submit('submit',$this->lang->line('kago_update'));
echo form_close();

?>

   