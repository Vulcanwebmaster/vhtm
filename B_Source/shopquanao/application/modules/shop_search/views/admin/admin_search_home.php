<h2><?php echo $title;?></h2>

<div class="" align="left">
	<form name="search" action="<?php echo base_url()?>index.php/shop_search/admin/search" method="post"> 
	<div>
	Ma san pham: <input name="masanpham" type="text" id="masanpham" value="" >
	Ma kho: <input name="makho" type="text" id="makho" value="" >
	<input type="submit" value="Search" />	
	</div>
    </form>       
</div>

<div align="right" style="float:right">
	<?php echo $pagination;?>                   
</div>


<br/>
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
        echo "<td align='center'>";
        echo anchor('products/admin/edit/'.$list['id'],$list['name']);
        echo "</td>\n";
        echo "<td align='center'>".$list['code']."</td>\n";        
        echo "<td align='center'>".$list['kho_code']."</td>\n";
        echo "<td align='center'>".$list['total']."</td>\n";      
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</tbody>\n</table>";
}

else 
{
	echo "<table id='tablesorter' class='tablesorter' border='1' cellspacing='0' cellpadding='3' width='100%'>\n";
    echo "<thead>\n<tr valign='top'>\n";
    echo "<th>ID San Pham</th>\n<th>Ten san pham</th><th>Ma so san pham</th><th>Ma so Kho</th><th>So luong</th>\n";
    echo "</tr>\n</thead>\n<tbody>\n";
}


?>