<h2><?php echo $title;?></h2>

<?php
echo form_open('sach/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tensach'>".'(*)Tên Sách:'."</label></td>\n";
$data = array('name'=>'tensach','id'=>'tensach','class'=>'text','value'=>$sach['tensach']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Mô Tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$sach['mota']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='loaisach_id'>".'(*)Loại Sách:'."</label></td>\n";
echo "<td>";
$options = array();
if(count($cacloaisach))
{
	foreach ($cacloaisach as $key => $list)
	{
		$options[$list['loaisach_id']] = $list['tenloai'];
	}
}
echo form_dropdown('loaisach_id',$options,$sach['loaisach_id']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tacgia'>".'Tác Giả:'."</label></td>\n";
$data = array('name'=>'tacgia','id'=>'tacgia','class'=>'text','value'=>$sach['tacgia']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('sach_id',$sach['sach_id']);

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
//echo form_submit('submit','update customer');
echo form_close();


?>