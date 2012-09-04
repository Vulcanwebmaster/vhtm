<h2><?php echo $title;?></h2>
<div class="clearboth">&nbsp;</div>

<?php

if (count($lienhe)){
        echo "<p>ID:         ".$lienhe->lienhe_id."</p>\n";
        echo "<p>Họ và tên:  ".$lienhe->hoten."</p>\n";
        echo "<p>Email:      ".$lienhe->email."</p>\n";
        echo "<p>Điện thoại: ".$lienhe->dienthoai."</p>\n";
        echo "<p>Tiêu đề:    ".$lienhe->tieude."</p>\n";
        echo "<p>Nội dung:   ".$lienhe->noidung."</p>\n";
}
?>