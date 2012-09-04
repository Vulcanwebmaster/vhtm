<h2><?php echo $title;?></h2>
<?php $this->load->helper('text');?>
<div class="buttons">
	<a href="<?php print  site_url('camnhan/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo cảm nhận mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($camnhan)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Nội Dung</th>\n
    	  <th>Thời Gian</th>\n
    	  <th>Người Đăng</th>\n
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($camnhan as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['camnhan_id']."</td>\n";   
        echo "<td align='center'>".word_limiter($list['noidung'],40)."..."."</td>\n";
        echo "<td align='center'>".$list['ngaythang']."</td>\n";
        echo "<td align='center'>".$list['nguoidang']."</td>\n";   
        echo "<td align='center'>";
        echo anchor('camnhan/admin/edit/'.$list['camnhan_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('camnhan/admin/delete/'.$list['camnhan_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['camnhan_id']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>