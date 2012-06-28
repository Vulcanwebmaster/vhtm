<h2><?php echo $title;?></h2>

<?php
echo "<div id=\"status_box\"><form id=\"form1\" name=\"form1\" method=\"post\" action=\"".base_url()."index.php/homepage/admin/update\">";

if (count($homepage)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID</th>\n
          <th>Tên Mục</th>\n
    	  <th>Dữ Liệu</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($homepage as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['muc_id']."</td>\n";
        echo "<td align='center'>".$list['tenmuc']."</td>\n";
		echo "<td>";
		$data = array('name'=>'dulieu_'.$list['muc_id'],'id'=>'long','rows'=>'5', 'cols'=>'60','value'=>$list['dulieu']);
		echo form_textarea($data) ;
		echo "</td>\n";
    }
    echo "</tbody>\n</table>";
}

echo "<input name=\"Action\" type=\"hidden\" id=\"Action\" value=\"Save\">
	  <center><input type=\"submit\" name=\"Submit\" value=\"Cập nhật\" class=\"btn\"></center>
	  </form>
	  </div><br>";
?>