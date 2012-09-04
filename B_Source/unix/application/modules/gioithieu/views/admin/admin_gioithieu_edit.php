<h2><?php echo $title;?></h2>

<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
        var temp = tinymce.EditorManager.get('mota').getContent();
        var i = 0;
        while (true)
        {
            temp = temp.replace('style="color: ',"@$%#@");
            temp = temp.replace('style="background-color: ',"&$%#@"); 
			i = i + 1;
			if (i == 10) break;
        }
        document.getElementById("mota_backup").value = temp;
        return true;
    }
</script>
<form action="<?php echo base_url()?>index.php/gioithieu/admin/edit" 
		method="post" onsubmit="return CheckForm();">
<?php

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='ten'>".'(*)Tên:'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text','value'=>$gioithieu['ten']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Nội Dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'8', 'cols'=>'80','value'=>$gioithieu['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('submenu_id',$gioithieu['submenu_id']);

?>
<input name = "noidung_backup" id = "noidung_backup" type = "hidden">
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
</form>