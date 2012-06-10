<h2><?php echo $title;?></h2>

<?php
echo form_open('thongtingioithieu/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='ten'>".'(*)Tên:'."</label></td>\n";
$data = array('name'=>'ten','id'=>'ten','class'=>'text','value'=>$thongtingioithieu['ten']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'Nội Dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'8', 'cols'=>'80','value'=>$thongtingioithieu['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('submenu_id',$thongtingioithieu['submenu_id']);

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