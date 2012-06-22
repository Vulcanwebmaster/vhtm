<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>
<script>
	$(function() {
		$( "#batdau" ).datepicker();
		$( "#ketthuc" ).datepicker();
	});

	$(function(){
		$( "#batdau" ).change(function(){
			var x = document.getElementById("batdau").value;
			document.getElementById("batdau").value = $.datepicker.formatDate('yy-mm-dd', new Date(x));
			});
	});
	$(function(){
		$( "#ketthuc" ).change(function(){
			var x = document.getElementById("ketthuc").value;
			document.getElementById("ketthuc").value = $.datepicker.formatDate('yy-mm-dd', new Date(x));
			});
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

<form action="<?php echo base_url()?>index.php/khoahoc/admin/create" 
		method="post" onsubmit="return CheckForm();">
<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='mota'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'mota','rows'=>'10', 'cols'=>'110');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'(*)Bắt đầu (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'batdau','id'=>'batdau','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ketthuc'>".'(*)Kết thúc (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ketthuc','id'=>'ketthuc','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='hocphi'>".'(*)Học phí:'."</label></td>\n";
$data = array('name'=>'hocphi','id'=>'hocphi','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh Đại Diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','rows'=>'10', 'cols'=>'110');
echo "<td id='nopad' >";
echo form_textarea($data) ;
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
