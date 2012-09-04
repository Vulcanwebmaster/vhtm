<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>

<form action="<?php echo base_url()?>index.php/hoidap/admin/update/<?php echo $hoidap->id_hoidap;?>" method="post">

<?php

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tên:'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text','value'=>$hoidap->ten);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tieude'>".'(*)Số điện thoại:'."</label></td>\n";
$data = array('name'=>'sodt','id'=>'sodt','class'=>'text','value'=>$hoidap->sodt);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Nội dung câu hỏi:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$hoidap->noidung);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Trả lời:'."</label></td>\n";
$data = array('name'=>'traloi','id'=>'long','rows'=>'17', 'cols'=>'30','value'=>$hoidap->traloi);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";
?>
</table>

<input name = "mota_backup" id = "mota_backup" type = "hidden"/>
<div class="buttons">
	<button type="submit" class="positive" name="submit" value="submit">
    <?php print $this->bep_assets->icon('disk');?>
    <?php print $this->lang->line('general_save');?>
	</button>
	
    <a href="<?php echo base_url()?>index.php/admin" class="negative">
    <?php print $this->bep_assets->icon('cross');?>
    <?php print $this->lang->line('general_cancel');?>
    </a>
</div>
</form>