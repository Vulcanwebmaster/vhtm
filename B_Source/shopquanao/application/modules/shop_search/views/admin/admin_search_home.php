<h2><?php echo $title;?></h2>

<div class="" align="left">
	<form name="search" action="<?php echo base_url()?>index.php/shop_search/admin/search" method="post"> 
	<div>
	<select name = "type_search" onchange = "search.submit();">
	<option value="0">Tim kiem theo chu de:</option>
	<option value="1">Ma san pham</option>
	<option value="2">Ma kho</option>	
	</select>
	<input name="search" type="text" id="search" value="Input here" >
	<input style="display:none" type="submit" value="Search" name="submit_search" class="btn"/>	
	</div>
    </form>       
</div><br/>
<div class="clearboth">&nbsp;</div>

<?php

if (count($search)){
    echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID San Pham</th>\n<th>Ten san pham</th><th>Ma so san pham</th><th>Ma so Kho</th><th>So luong</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
    foreach ($search as $key => $list){
        echo "<tr valign='top'>\n";
        echo "<td align='center'>".$list['id']."</td>\n";
        echo "<td align='center'>".$list['name']."</td>\n";
        echo "<td align='center'>".$list['code']."</td>\n";        
        echo "<td align='center'>".$list['kho_code']."</td>\n";
        echo "<td align='center'>".$list['total']."</td>\n";      
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}


?>