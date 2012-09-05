<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>


<form action="<?php echo base_url()?>index.php/sukien/admin/create" 
		method="post">
<?php
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)'.'Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='noidung'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'mota','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='thoigian'>".'Thời gian :'."</label></td>\n";
$data = array('name'=>'thoigian','id'=>'thoigian','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='phanhoi'>".'Địa điểm:'."</label></td>\n";
$data = array('name'=>'diadiem','id'=>'diadiem','class'=>'text');
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
</form>