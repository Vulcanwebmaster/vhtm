<h2><?php echo $title;?></h2>

<div class="clearboth">&nbsp;</div>

<?php

if (count($customers)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID Khách hàng</th>\n<th>Họ</th><th>Tên</th><th>Số điện thoại</th><th>Email</th><th>Địa chỉ</th><th>Thành phố</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($customers as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['customer_id']."</td>\n";
        echo "<td align='center'>".$list['customer_first_name']."</td>\n";
        echo "<td align='center'>".$list['customer_last_name']."</td>\n";
        echo "<td align='center'>".$list['phone_number']."</td>\n";
        echo "<td align='center'>".$list['email']."</td>\n";
        echo "<td align='center'>".$list['address']."</td>\n";
        echo "<td align='center'>".$list['city']."</td>\n";
        //echo " | ";
        // can't use kaimonokago/admin/delete, at the moment have to use customer/admin/delete
        // this must check orphans, kaimonokago/models/delete is used after checking it
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>