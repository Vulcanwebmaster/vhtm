<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script>
	$(function(){
		$( "#thoigian" ).change(function(){
			var x = document.getElementById("thoigian").value;
			document.getElementById("thoigian").value = $.datepicker.formatDate('yy-mm-dd', new Date(x));
			});
	});
	$(function() {
		$( "#thoigian" ).datepicker();
	});
</script>
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
<form action="<?php echo base_url()?>index.php/khoahoc/admin/edit" 
		method="post" onsubmit="return CheckForm();">
		
<?php


echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text','value'=>$khoahoc['tieude']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$khoahoc['mota']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'Ngày đăng (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'thoigian','id'=>'thoigian','value'=>$khoahoc['thoigian'],'class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='hocphi'>".'Học phí:'."</label></td>\n";
$data = array('name'=>'hocphi','id'=>'hocphi','class'=>'text','value'=>$khoahoc['hocphi']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh Đại Diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','rows'=>'10', 'cols'=>'80','value'=>"<p><img src=\"".base_url().$khoahoc['anhdaidien']."\" alt=\"\" /></p>");
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='loaikhoahoc_id'>".'(*) Loại khóa học:'."</label></td>\n";
echo "<td>";
$options = array();
if(count($cacloaikhoahoc))
{
	foreach ($cacloaikhoahoc as $key => $list)
	{
		$options[$list['loaikhoahoc_id']] = $list['tenloai'];
	}
}
echo form_dropdown('loaikhoahoc_id',$options,$khoahoc['loaikhoahoc_id']);
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('khoahoc_id',$khoahoc['khoahoc_id']);

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