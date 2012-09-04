<h2><?php echo $title;?></h2>
<?php $this->load->helper('text');?>
<div class="buttons">
	<a href="<?php print  site_url('tintuc/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo tin mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($tintuc)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
          <th>Tiêu Đề</th>\n
    	  <th>Alias</th>\n
    	  <th>Nội dung</th>\n
    	  <th>Ảnh đại diện</th>\n
    	  <th>Ngày tháng</th>\n";    	  
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($tintuc as $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list->tintuc_id."</td>\n";
        echo "<td align='center'>".word_limiter($list->tieude,30)."..."."</td>\n";
        echo "<td align='center'>".$list->alias."</td>\n";
        echo "<td align='center'>".word_limiter($list->noidung,40)."</td>\n";
        echo "<td align='center'>".substr($list->anhdaidien,0,100)."</td>\n";
        echo "<td align='center'>".$list->ngaythang."</td>\n";     
        echo "<td align='center'>";
        echo anchor('tintuc/admin/edit/'.$list->tintuc_id,$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('tintuc/admin/delete/'.$list->tintuc_id,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list->tieude."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>