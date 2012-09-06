<h2><?php echo $title;?></h2>
<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
		
        var temp1 = tinymce.EditorManager.get('dulieu_1').getContent();
        var temp2 = tinymce.EditorManager.get('dulieu_2').getContent();
        var temp3 = tinymce.EditorManager.get('dulieu_3').getContent();
        var temp7 = tinymce.EditorManager.get('dulieu_7').getContent();
        var temp8 = tinymce.EditorManager.get('dulieu_8').getContent();
        
        var i = 0;
        while (true)
        {
            temp1 = temp1.replace('style="color: ',"@$%#@");
            temp1 = temp1.replace('style="background-color: ',"&$%#@");
            temp2 = temp2.replace('style="color: ',"@$%#@");
            temp2 = temp2.replace('style="background-color: ',"&$%#@");
            temp3 = temp3.replace('style="color: ',"@$%#@");
            temp3 = temp3.replace('style="background-color: ',"&$%#@");
            temp7 = temp7.replace('style="color: ',"@$%#@");
            temp7 = temp7.replace('style="background-color: ',"&$%#@");
            temp8 = temp8.replace('style="color: ',"@$%#@");
            temp8 = temp8.replace('style="background-color: ',"&$%#@"); 
			i = i + 1;
			if (i == 10000) break;
        }
        document.getElementById("noidung_1").value = temp1;
        document.getElementById("noidung_2").value = temp2;
        document.getElementById("noidung_3").value = temp3;
        document.getElementById("noidung_7").value = temp7;
        document.getElementById("noidung_8").value = temp8;
        return true;
    }
</script>
<?php
echo '<div id="status_box">';
?>
	<form id="form1" name="form1" method="post" action="<?php echo base_url() ?>index.php/homepage/admin/update" onsubmit="return CheckForm();">
<?php
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
		$b = array('class'=>'text','name'=>'dulieu_'.$list['muc_id'],'id'=>'dulieu_'.$list['muc_id'],'rows'=>'5', 'cols'=>'60','value'=>$list['dulieu']);
		
		if ($list['muc_id'] == 6)
		{
			echo form_input($b);
		}
		else 
		{
			echo form_textarea($b) ;
		}
		echo "</td>\n";
    }
    }
    echo "</tbody>\n</table>";
}
?>
	<input name ="noidung_1" id ="noidung_1" type ="hidden">
	<input name ="noidung_2" id ="noidung_2" type ="hidden">
	<input name ="noidung_3" id ="noidung_3" type ="hidden">
	<input name ="noidung_7" id ="noidung_7" type ="hidden">
	<input name ="noidung_8" id ="noidung_8" type ="hidden">
<?php

echo "<input name=\"Action\" type=\"hidden\" id=\"Action\" value=\"Save\">
	  <center><input type=\"submit\" name=\"Submit\" value=\"Cập nhật\" class=\"btn\"></center>
	  </form>
	  </div><br>";
?>