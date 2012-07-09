<h2><?php echo $title;?></h2>
<div class="clearboth">&nbsp;</div>

<?php

if (count($listContact)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
			<th>Họ tên</th>\n
          <th>Email</th>\n
          <th>Điện thoại</th>\n
          <th>Tiêu Đề</th>\n
          <th>Nội dung</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($listContact as $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list->lienhe_id."</td>\n";
        echo "<td align='center'>".$list->hoten."</td>\n";
        echo "<td align='center'>".$list->email."</td>\n";
        echo "<td align='center'>".$list->dienthoai."</td>\n";
        echo "<td align='center'>".substr($list->tieude,0,40)."..."."</td>\n";
        echo "<td align='center'>".substr($list->noidung,0,100)."..."."</td>\n";
        echo "<td align='center'>";
        echo "&nbsp;&nbsp;";
        echo anchor('lienhe/admin/view/'.$list->lienhe_id,$this->bep_assets->icon('pencil'));
        echo anchor('lienhe/admin/delete/'.$list->lienhe_id,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list->tieude."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>