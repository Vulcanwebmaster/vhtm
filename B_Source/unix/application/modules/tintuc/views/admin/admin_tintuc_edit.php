<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script>
	$(function(){
		$( "#ngaythang" ).change(function(){
			var x = document.getElementById("ngaythang").value;
			document.getElementById("ngaythang").value = $.datepicker.formatDate('yy-mm-dd', new Date(x));
			});
	});
	$(function() {
		$( "#ngaythang" ).datepicker();
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
<form action="<?php echo base_url()?>index.php/tintuc/admin/edit/<?php echo $tintuc->tintuc_id;?>" 
		method="post" onsubmit="return CheckForm();">
		
<?php


echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text','value'=>$tintuc->tieude);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='alias'>".'(*)Alias:'."</label></td>\n";
$data = array('name'=>'alias','id'=>'alias','class'=>'text','value'=>$tintuc->alias);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Nội dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$tintuc->noidung);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Ảnh đại diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$tintuc->anhdaidien);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ngaythang'>".'(*)Ngày tháng (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ngaythang','id'=>'ngaythang','class'=>'text','value'=>$tintuc->ngaythang);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";



echo "</table>\n";

echo form_hidden('tintuc_id',$tintuc->tintuc_id);

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