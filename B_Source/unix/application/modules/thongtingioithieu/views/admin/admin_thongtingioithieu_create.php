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

<form action="<?php echo base_url()?>index.php/thongtingioithieu/admin/create" 
		method="post" onsubmit="return CheckForm();">

<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tenloai'>".'(*)'.'Tên:'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Nội dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'8', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";


echo "</table>";
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