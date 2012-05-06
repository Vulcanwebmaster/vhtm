<h2><?php echo $title;?></h2>

<?php
echo form_open('shop_kho/admin/edit');

echo "\n<table id='preference_form'><tr><td class='label'><label for='kho_name'>*".$this->lang->line('webshop_name')."</label></td>\n";
$data = array('name'=>'kho_name','id'=>'kho_name','class'=>'text','value'=>$kho['kho_name']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='kho_code'>".$this->lang->line('webshop_code')."</label></td>\n";
$data = array('name'=>'kho_code','id'=>'kho_code','class'=>'text', 'value'=>$kho['kho_code']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo form_hidden('kho_id',$kho['kho_id']);

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
//echo form_submit('submit','update customer');
echo form_close();


?>