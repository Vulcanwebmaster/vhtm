<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>

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

<form action="<?php echo base_url()?>index.php/hoithao/admin/edit" 
		method="post" onsubmit="return CheckForm();">
<?php

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text','value'=>$hoithao['tieude']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Nội Dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$hoithao['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='thoigian'>".'Thời Gian:'."</label></td>\n";
$data = array('name'=>'thoigian','id'=>'thoigian','class'=>'text','value'=>$hoithao['thoigian']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='phanhoi'>".'Phản hồi:'."</label></td>\n";
$options = array('1' => 'Có', '0' => 'Không');
echo "<td>";
echo form_dropdown('phanhoi',$options,$hoithao['phanhoi']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh Đại Diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','rows'=>'10', 'cols'=>'80','value'=>"<p><img src=\"".base_url().$hoithao['anhdaidien']."\" alt=\"\" /></p>");
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('hoithao_id',$hoithao['hoithao_id']);

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