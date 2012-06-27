<h2><?php echo $title;?></h2>

<?php

if (count($dangky)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Họ tên</th>\n
    	  <th>Trường</th>\n
    	  <th>Lớp</th>\n
    	  <th>Phụ huynh</th>\n
    	  <th>Số điện thoại</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($dangky as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['dangky_id']."</td>\n";   
        echo "<td align='center'>".$list['hoten']."</td>\n";
        echo "<td align='center'>".$list['truong']."</td>\n";
        echo "<td align='center'>".$list['lop']."</td>\n";
        echo "<td align='center'>".$list['phuhuynh']."</td>\n";
        echo "<td align='center'>".$list['dienthoai']."</td>\n";   
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>