<h2><?php echo $title;?></h2>
<script language="JavaScript" type="text/javascript">
	function CheckForm() 
	{
        var temp1 = tinymce.EditorManager.get('noidung_1').getContent();
        var temp2 = tinymce.EditorManager.get('noidung_2').getContent();
        var temp3 = tinymce.EditorManager.get('noidung_3').getContent();
        var temp4 = tinymce.EditorManager.get('noidung_4').getContent();
        var i = 0;
        while (true)
        {
            temp1 = temp1.replace("../../","@$%#@");
            temp2 = temp2.replace("../../","@$%#@");
            temp3 = temp3.replace("../../","@$%#@");
            temp4 = temp4.replace("../../","@$%#@");
			i = i + 1;
			if (i == 10) break;
        }
        document.getElementById("noidung_backup_1").value = temp1;
        document.getElementById("noidung_backup_2").value = temp2;
        document.getElementById("noidung_backup_3").value = temp3;
        document.getElementById("noidung_backup_4").value = temp4;
        return true;
    }
</script>
<div id="status_box">
	<form action="<?php echo base_url() ?>index.php/slide/admin/update" method="post" onsubmit="return CheckForm();">
<?php
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>Tiêu đề</th>\n
    	  <th>Nội dung</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
	
	echo "<tr><td class='label'><label for='long'>".'(*) '.$slide1->tieude.' :'."</label></td>\n";
	$data = array('name'=>'noidung_1','id'=>'noidung_1','rows'=>'10', 'cols'=>'30','value'=>$slide1->noidung);
	echo "<td id='nopad' >";
	echo form_textarea($data) ;
	echo "</td></tr>\n";
	
	echo "<tr><td class='label'><label for='long'>".'(*) '.$slide2->tieude.' :'."</label></td>\n";
	$data = array('name'=>'noidung_2','id'=>'noidung_2','rows'=>'10', 'cols'=>'30','value'=>$slide2->noidung);
	echo "<td id='nopad' >";
	echo form_textarea($data) ;
	echo "</td></tr>\n";
	
	echo "<tr><td class='label'><label for='long'>".'(*) '.$slide3->tieude.' :'."</label></td>\n";
	$data = array('name'=>'noidung_3','id'=>'noidung_3','rows'=>'10', 'cols'=>'30','value'=>$slide3->noidung);
	echo "<td id='nopad' >";
	echo form_textarea($data) ;
	echo "</td></tr>\n";
	
	echo "<tr><td class='label'><label for='long'>".'(*) '.$slide4->tieude.' :'."</label></td>\n";
	$data = array('name'=>'noidung_4','id'=>'noidung_4','rows'=>'10', 'cols'=>'30','value'=>$slide4->noidung);
	echo "<td id='nopad' >";
	echo form_textarea($data) ;
	echo "</td></tr>\n";
	
    echo "</tbody>\n</table>";
?>
	<input name ="noidung_backup_1" id ="noidung_backup_1" type ="hidden">
	<input name ="noidung_backup_2" id ="noidung_backup_2" type ="hidden">
	<input name ="noidung_backup_3" id ="noidung_backup_3" type ="hidden">
	<input name ="noidung_backup_4" id ="noidung_backup_4" type ="hidden">
<?php
echo "<input name=\"Action\" type=\"hidden\" id=\"Action\" value=\"Save\">
	  <center><input type=\"submit\" name=\"Submit\" value=\"Cập nhật\" class=\"btn\"></center>";
?>

</form>
</div><br>
