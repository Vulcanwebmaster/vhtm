<h2><?php echo $title;?></h2>

<?php
echo form_open('loaikhoahoc/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tenloai'>".'(*)Tên Loại:'."</label></td>\n";
$data = array('name'=>'tenloai','id'=>'tenloai','class'=>'text','value'=>$loaisach['tenloai']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('loaikhoahoc_id',$loaisach['loaikhoahoc_id']);

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