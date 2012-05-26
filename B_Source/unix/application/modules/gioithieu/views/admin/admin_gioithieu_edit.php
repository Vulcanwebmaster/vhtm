<h2><?php echo $title;?></h2>

<?php
echo form_open('gioithieu/admin/edit');

echo "\n<table id='preference_form'>";
echo "<tr><td class='label'><label for='long'>".'*Nội dung tin giới thiệu:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$gioithieu['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr></table>\n";

echo form_hidden('gioithieu_id',$gioithieu['gioithieu_id']);

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