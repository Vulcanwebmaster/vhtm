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
<?php
echo form_open('camnhan/admin/create');
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='long'>".'(*)Nội dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ngaythang'>".'(*)'.'Thời gian đăng (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ngaythang','id'=>'ngaythang','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='nguoidang'>".'(*)'.'Người Đăng:'."</label></td>\n";
$data = array('name'=>'nguoidang','id'=>'nguoidang','class'=>'text');
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