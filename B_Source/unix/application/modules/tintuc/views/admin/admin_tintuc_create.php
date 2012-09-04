<?php if (validation_errors())
{
	echo '<div style="border:solid 1px #3CF; padding:10px; background:url('.base_url().'assets/images/status/bg_info.gif)">';//echo '<div style="border:solid 1px #3CF; padding:10px;">';// background:url('.base_url().'assets/images/status/bg_info.gif)">';
	echo validation_errors('<div class="error">','</div>');
	echo '</div>';
}
?>

<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script>
	$(function() {
		$( "#ngaythang" ).datepicker();
	});

	$(function(){
		$( "#ngaythang" ).change(function(){
			var x = document.getElementById("ngaythang").value;
			document.getElementById("ngaythang").value = $.datepicker.formatDate('yy-mm-dd', new Date(x));
			});
	});
</script>

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
        document.getElementById("mota_backup").value = temp;
        return true;
    }
</script>

<form action="<?php echo base_url()?>index.php/tintuc/admin/create" 
		method="post" onsubmit="return CheckForm();">
<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='alias'>".'(*)Alias:'."</label></td>\n";
$data = array('name'=>'alias','id'=>'alias','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Nội dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'110');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Ảnh đại diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'long','rows'=>'10', 'cols'=>'110');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ngaythang'>".'Ngày tháng (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ngaythang','id'=>'ngaythang','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>";
?>
<input name = "mota_backup" id = "mota_backup" type = "hidden">
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
