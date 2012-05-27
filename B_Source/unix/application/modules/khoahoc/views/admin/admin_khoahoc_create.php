<h2><?php echo $title;?></h2>

<?php
echo form_open('khoahoc/admin/create');
echo "\n<table id='preference_form'>";

echo "<tr><td class='label'><label for='long'>".'(*)Mô tả:'."</label></td>\n";
$data = array('name'=>'mota','id'=>'long','rows'=>'10', 'cols'=>'80');
echo "<td id='nopad' >";
echo form_textarea($data) ;
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'(*)Bắt đầu (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'batdau','id'=>'batdau','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='batdau'>".'(*)Kết thúc (yyyy-mm-dd):'."</label></td>\n";
$data = array('name'=>'batdau','id'=>'batdau','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "<tr><td class='label'><label for='hocphi'>".'(*)Học phí:'."</label></td>\n";
$data = array('name'=>'hocphi','id'=>'hocphi','class'=>'text');
echo "<td>";
echo form_input($data);
echo "</td></tr>\n";

echo "</table>";
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
echo form_close();
?>