<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('khoahoc/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo khóa học mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($khoahoc)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
          <th>Tiêu Đề</th>\n
    	  <th>Mô Tả</th>\n
    	  <th>Bắt Đầu</th>\n
    	  <th>Kết Thúc</th>\n
    	  <th>Học Phí</th>\n
    	  <th>Ảnh</th>\n
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($khoahoc as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['khoahoc_id']."</td>\n";
        echo "<td align='center'>".substr($list['tieude'],0,40)."..."."</td>\n";
        echo "<td align='center'>".substr($list['mota'],0,100)."..."."</td>\n";
        echo "<td align='center'>".$list['batdau']."</td>\n";
        echo "<td align='center'>".$list['ketthuc']."</td>\n";
        echo "<td align='center'>".$list['hocphi']."</td>\n";
        echo "<td align='center'>".$list['anhdaidien']."</td>\n";      
        echo "<td align='center'>";
        echo anchor('khoahoc/admin/edit/'.$list['khoahoc_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('khoahoc/admin/delete/'.$list['khoahoc_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['tieude']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>