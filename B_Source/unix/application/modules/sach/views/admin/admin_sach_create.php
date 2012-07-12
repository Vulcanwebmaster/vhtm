<h2><?php echo $title;?></h2>
<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
        var temp = tinymce.EditorManager.get('noidung').getContent();
        var i = 0;
        while (true)
        {
            temp = temp.replace('style="color: ',"@$%#@");
            temp = temp.replace('style="background-color: ',"&$%#@"); 
			i = i + 1;
			if (i == 10) break;
        }
        document.getElementById("noidung_backup").value = temp;
        return true;
    }
</script>

<form action="<?php echo base_url()?>index.php/sach/admin/create" 
		method="post" onsubmit="return CheckForm();">

<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tensach'>".'(*)Tên sách:'."</label></td>\n";
$data = array('name'=>'tensach','id'=>'tensach','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Ảnh đại diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='loaisach_id'>".'(*) Loại sách:'."</label></td>\n";
echo "<td>";
$options = array();
if(count($cacloaisach))
{
	foreach ($cacloaisach as $key => $list)
	{
		$options[$list['loaisach_id']] = $list['tenloai'];
	}
}
echo form_dropdown('loaisach_id',$options);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tacgia'>".'Tác giả:'."</label></td>\n";
$data = array('name'=>'tacgia','id'=>'tacgia','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>";
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
echo form_close();
?>