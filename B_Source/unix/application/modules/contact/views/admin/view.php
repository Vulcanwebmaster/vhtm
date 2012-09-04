<h2><?php echo $title;?></h2>
<link type="text/css" href="<?php echo base_url();?>assets/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.20.custom.min.js"></script>

<form action="<?php echo base_url()?>index.php/contact/admin/update/<?php echo $contact->id;?>" method="post">

<?php

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*) Tên công ty :'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text','value'=>$contact->ten);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tieude'>".'(*) Địa chỉ :'."</label></td>\n";
$data = array('name'=>'diachi','id'=>'diachi','class'=>'text','value'=>$contact->diachi);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tieude'>".'(*) Điện thoại :'."</label></td>\n";
$data = array('name'=>'dienthoai','id'=>'dienthoai','class'=>'text','value'=>$contact->dienthoai);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tieude'>".'(*) Email :'."</label></td>\n";
$data = array('name'=>'email','id'=>'email','class'=>'text','value'=>$contact->email);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='tieude'>".'(*) Website :'."</label></td>\n";
$data = array('name'=>'website','id'=>'website','class'=>'text','value'=>$contact->website);
echo "<td>";
echo form_input($data);
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