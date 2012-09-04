<h2><?php echo $title;?></h2>
<div class="clearboth">&nbsp;</div>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<?php

if (count($listContact)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th class='table1'>ID</th>\n
			<th class='table1'>Họ tên</th>\n
          <th class='table1'>Số điện thoại</th>\n
          <th class='table1'>Nội dung</th>\n
          <th class='table1'>Trả lời</th>\n
		  <th class='table1'>Ngày gửi</th>\n
		  <th class='table1'>Lượt xem</th>\n
		  <th class='table1'>Lượt trả lời</th>\n
		  <th class='table1'>Sửa / Xóa</th>";
		  
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($listContact as $list){
        echo "<tr valign='top'>\n";
        echo "<td class='table1'>".$list->id_hoidap."</td>\n";
        echo "<td>".$list->ten."</td>\n";
        echo "<td class='table1'>".$list->sodt."</td>\n";
       
        echo "<td>".substr($list->noidung,0,30)."..."."</td>\n";
        echo "<td>".substr($list->traloi,0,60)."..."."</td>\n";
		echo "<td class='table1'>".$list->ngaygui."</td>\n";
		echo "<td class='table1'>".$list->luotxem."</td>\n";
		echo "<td class='table1'>".$list->luottraloi."</td>\n";
        echo "<td class='table1'>";
        echo "&nbsp;&nbsp;";
        echo anchor('hoidap/admin/view/'.$list->id_hoidap,$this->bep_assets->icon('pencil'));
        echo anchor('hoidap/admin/delete/'.$list->id_hoidap,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list->id_hoidap."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>