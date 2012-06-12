<h2><?php echo $title;?></h2>

<?php
echo form_open('category/admin/create');
echo "\n<table id='preference_form'><tr><td class='label'><label for='catname'>"."(*)".$this->lang->line('kago_name')."</label></td>\n";
$data = array('name'=>'name','id'=>'catname','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='metadesc'>".$this->lang->line('kago_meta_desc')."</label></td>\n";
$data = array('name'=>'metadesc','id'=>'metadesc','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='metakeyword'>".$this->lang->line('kago_meta_keyword')."</label></td>\n";
$data = array('name'=>'metakeyword','id'=>'metakeyword','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='short'>".$this->lang->line('kago_short_desc')."</label></td>\n";
$data = array('name'=>'shortdesc','id'=>'short','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".$this->lang->line('kago_long_desc')."</label></td>\n";
$data = array('name'=>'longdesc','id'=>'long','rows'=>'30', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data);
echo "</td></tr>\n";

if (count($categories))
{
	echo "<tr><td class='label'><label for='parent_id'>"."Loại sản phẩm cha"."</label></td>\n";
	$options1 = array('0' => 'Không có loại sản phẩm cha');
	foreach ($categories as $key => $list) 
	{
		if ($list['parentid'] == 0)
		{
			$options1[$list['id']] = $list['name'];
		}		
	}
	echo "<td>";
	echo form_dropdown('parent_id',$options1);
	echo "</td></tr>\n";
}

echo "<tr><td class='label'><label for='is_display_in_menu'>".$this->lang->line('kago_is_display')."</label></td>\n";
$options2 = array('1' => 'Có', '0' => 'Không');
echo "<td>";
echo form_dropdown('is_display_in_menu',$options2);
echo "</td></tr>\n";

echo "</table>\n";

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

//echo form_submit('submit',$this->lang->line('kago_create'));
echo form_close();
/*
echo "<pre>category";
print_r ($categories);
echo "</pre>";
 * 
 */
?>
