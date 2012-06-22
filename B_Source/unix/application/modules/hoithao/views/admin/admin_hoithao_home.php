<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('hoithao/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo hội thảo mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($hoithao)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Tiêu Đề</th>\n
    	  <th>Thời Gian</th>\n
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($hoithao as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['hoithao_id']."</td>\n";
        echo "<td align='center'>".substr($list['tieude'],0,40)."..."."</td>\n";
        echo "<td align='center'>".$list['thoigian']."..."."</td>\n";    
        echo "<td align='center'>";
        echo anchor('hoithao/admin/edit/'.$list['hoithao_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('hoithao/admin/delete/'.$list['hoithao_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['tieude']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>