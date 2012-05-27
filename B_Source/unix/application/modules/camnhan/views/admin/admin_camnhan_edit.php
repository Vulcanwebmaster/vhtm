<h2><?php echo $title;?></h2>

<?php
echo form_open('camnhan/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu Đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text','value'=>$camnhan['tieude']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Nội Dung:'."</label></td>\n";
$data = array('name'=>'noidung','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$camnhan['noidung']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='thoigian'>".'(*)Thời Gian:'."</label></td>\n";
$data = array('name'=>'thoigian','id'=>'thoigian','class'=>'text','value'=>$camnhan['thoigian']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='phanhoi'>".'Phản hồi:'."</label></td>\n";
$options = array('1' => 'Có', '0' => 'Không');
echo "<td>";
echo form_dropdown('phanhoi',$options,$camnhan['phanhoi']);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh Đại Diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','class'=>'text','value'=>$camnhan['anhdaidien']);
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