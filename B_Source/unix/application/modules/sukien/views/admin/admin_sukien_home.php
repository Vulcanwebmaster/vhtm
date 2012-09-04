<h2><?php echo $title;?></h2>
<style type="text/css">
	.table1
	{
		text-align:center;
	}
</style>
<div class="buttons">
	<a href="<?php print  site_url('sukien/admin/create')?>">
    <?php print $this->bep_assets->icon('add');?>
    <?php print "Tạo sự kiện mới"; ?>
    </a>
</div>
<div class="clearboth">&nbsp;</div>

<?php

if (count($sukien)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th class='table1'>ID</th>\n
    	  <th class='table1'>Tiêu đề</th>\n
    	  <th class='table1'>Nội dung</th>\n
    	  <th class='table1'>Thời gian</th>\n
    	  <th class='table1'>Địa điểm</th>\n
    	  <th class='table1'>Sửa/Xóa</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($sukien as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td>".$list->id."</td>\n";
        echo "<td>".$list->tieude."</td>\n";
        echo "<td>".$list->mota."</td>\n";
        echo "<td class='table1'>".$list->thoigian."</td>\n";
		echo "<td>".$list->diadiem."</td>\n";     
        echo "<td class='table1'>";
        echo anchor('sukien/admin/site/'.$list->id,$this->bep_assets->icon('pencil'));
        echo "&nbsp;&nbsp;";
        echo anchor('sukien/admin/delete/'.$list->id,$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list->id."')"));
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}
?>