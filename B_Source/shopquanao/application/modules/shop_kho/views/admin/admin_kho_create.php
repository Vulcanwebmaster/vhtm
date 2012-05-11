<h2><?php echo $title;?></h2>

<?php

echo form_open('shop_kho/admin/create');
echo "\n<table id='preference_form'><tr><td class='label'><label for='kho_name'>*Tên kho: </label></td>\n";
$data = array('name'=>'kho_name','id'=>'kho_name','class'=>'text','value'=>set_value('kho_name'));
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='kho_code'>*Mã kho: </label></td>\n";
$data = array('name'=>'kho_code','id'=>'kho_code','class'=>'text','value'=>set_value('kho_code'));
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

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
//echo form_submit('submit','create customer');
echo form_close();


?>