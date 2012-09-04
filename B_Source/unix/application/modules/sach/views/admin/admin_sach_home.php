<h2><?php echo $title;?></h2>

<div class="buttons">
	<a href="<?php print  site_url('sach/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo sách mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>
<?php $this->load->helper('text');?>
<?php

if (count($sach)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
    	  <th>Tên Sách</th>\n
    	  <th>Mô Tả</th>\n
    	  <th>Loại sách</th>\n
    	  <th>Tác Giả</th>\n
    	  <th>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($sach as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['sach_id']."</td>\n";
        echo "<td align='center'>".$list['tensach']."</td>\n";
        if (strlen($list['mota']) > 20)
        	$list['mota'] = word_limiter($list['mota'],5);
        echo "<td align='center'>".$list['mota']."\"</td>\n";
        echo "<td align='center'>".$list['tenloai']."</td>\n";
        echo "<td align='center'>".$list['tacgia']."</td>\n";    
        echo "<td align='center'>";
        echo anchor('sach/admin/edit/'.$list['sach_id'],$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('sach/admin/delete/'.$list['sach_id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['tensach']."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>