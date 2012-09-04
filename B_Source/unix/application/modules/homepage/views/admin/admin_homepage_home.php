<h2><?php echo $title;?></h2>
<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
        var temp = tinymce.EditorManager.get('noidung').getContent();
        var i = 0;
        while (true)
        {
            temp = temp.replace('style="color: ',"@$%#@");
            temp = temp.replace('style="background-color: ',"&$%#@"); 
			i = i + 1;
			if (i == 1000) break;
        }
        document.getElementById("noidung_backup").value = temp;
        return true;
    }
</script>

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
    {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['muc_id']."</td>\n";
        echo "<td align='center'>";
		$a=array('name'=>'tenmuc_'.$list['muc_id'],'value'=>$list['tenmuc'],'class'=>'text');
		echo form_input($a);
		echo "</td>\n";
		
		echo "<td>";
		$b = array('name'=>'dulieu_'.$list['muc_id'],'id'=>'long','rows'=>'5', 'cols'=>'60','value'=>$list['dulieu']);
		if ($list['muc_id'] == 6)
		{
			echo form_input($b);
		}
		else echo form_textarea($b) ;
		echo "</td>\n";
    }
    }
    echo "</tbody>\n</table>";
}

echo "<input name=\"Action\" type=\"hidden\" id=\"Action\" value=\"Save\">
	  <center><input type=\"submit\" name=\"Submit\" value=\"Cập nhật\" class=\"btn\"></center>
	  </form>
	  </div><br>";
?>