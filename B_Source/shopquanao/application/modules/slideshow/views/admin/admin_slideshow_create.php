<h2><?php echo $title;?></h2>
<?php
echo form_open_multipart('slideshow/admin/create')."\n";

echo "\n<table id='preference_form'><tr><td class='label'><label for='pname'>"."(*)".$this->lang->line('kago_name')."</label></td>\n";
$data = array('name'=>'name','id'=>'pname','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='short'>".$this->lang->line('kago_short_desc')."</label></td>\n";
$data = array('name'=>'shortdesc','id'=>'short','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".$this->lang->line('kago_long_desc')."</label></td>\n";
$data = array('name'=>'longdesc','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;

?>
<?php
echo "</td></tr>\n";
?>

<tr>
	<td>
		<strong>Select Image:</strong>
	</td>
	<td>
		<form action="<?php echo base_url()?>index.php/slideshow/admin/create" method="post" enctype="multipart/form-data">
		<label for="photo"></label>
		<input type="file" name="image"/>
		<input type="submit" value="Upload" />
</form>
	</td>
</tr><br/>

<?php

echo "<tr><td class='label'><label for='status'>".$this->lang->line('kago_status')."</label></td>\n";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo "<td>";
echo form_dropdown('status',$options);
echo "</td></tr>\n";

echo "</table>\n";

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
//echo form_submit('submit',$this->lang->line('kago_add_slide'));
echo form_close();


?>


