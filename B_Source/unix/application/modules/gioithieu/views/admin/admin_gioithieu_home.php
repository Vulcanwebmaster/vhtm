<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('gioithieu/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo tin giới thiệu mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($gioithieu)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>Tin Tức ID</th>\n
    	  <th>Tin giới thiệu</th>
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($gioithieu as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['gioithieu_id']."</td>\n";
        echo "<td align='center'>".substr($list['noidung'],0,150)."..."."</td>\n";      
        echo "<td align='center'>";
        echo anchor('gioithieu/admin/edit/'.$list['gioithieu_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('gioithieu/admin/delete/'.$list['gioithieu_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['noidung']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>