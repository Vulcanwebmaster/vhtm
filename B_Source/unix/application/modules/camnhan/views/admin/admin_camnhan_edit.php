<h2><?php echo $title;?></h2>

<?php
echo form_open('camnhan/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='long'>".'(*)Nội Dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$camnhan['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ngaythang'>".'(*)Thời Gian Đăng:'."</label></td>\n";
$data = array('name'=>'ngaythang','id'=>'ngaythang','class'=>'text','value'=>$camnhan['ngaythang']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='nguoidang'>".'(*)Người Đăng:'."</label></td>\n";
$data = array('name'=>'nguoidang','id'=>'nguoidang','class'=>'text','value'=>$camnhan['nguoidang']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('camnhan_id',$camnhan['camnhan_id']);

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