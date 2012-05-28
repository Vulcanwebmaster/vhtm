<h2><?php echo $title;?></h2>

<?php
echo form_open('khoahoc/admin/edit');

echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='tieude'>".'(*)Tiêu đề:'."</label></td>\n";
$data = array('name'=>'tieude','id'=>'tieude','class'=>'text','value'=>$khoahoc['tieude']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='long'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80','value'=>$khoahoc['mota']);
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'(*)Bắt đầu (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'batdau','id'=>'batdau','class'=>'text','value'=>$khoahoc['batdau']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='ketthuc'>".'(*)Kết thúc (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'ketthuc','id'=>'ketthuc','class'=>'text','value'=>$khoahoc['ketthuc']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='hocphi'>".'(*)Học phí:'."</label></td>\n";
$data = array('name'=>'hocphi','id'=>'hocphi','class'=>'text','value'=>$khoahoc['hocphi']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='anhdaidien'>".'Ảnh đại diện:'."</label></td>\n";
$data = array('name'=>'anhdaidien','id'=>'anhdaidien','class'=>'text','value'=>$khoahoc['anhdaidien']);
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>\n";

echo form_hidden('khoahoc_id',$khoahoc['khoahoc_id']);

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