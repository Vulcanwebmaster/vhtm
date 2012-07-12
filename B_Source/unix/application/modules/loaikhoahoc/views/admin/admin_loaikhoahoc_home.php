<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('loaikhoahoc/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo loại khóa học mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($loaikhoahoc)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Tên Loại</th>\n
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($loaikhoahoc as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['loaikhoahoc_id']."</td>\n";
        echo "<td align='center'>".$list['tenloai']."</td>\n";
        echo "<td align='center'>";
        echo anchor('loaikhoahoc/admin/edit/'.$list['loaikhoahoc_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('loaikhoahoc/admin/delete/'.$list['loaikhoahoc_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['tenloai']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>