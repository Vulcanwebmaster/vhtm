<?php
		$link = mysql_connect("localhost", "istockgold", "gacon2372002");    
        mysql_select_db('istockgold', $link);
   
        $sql='SELECT c_reserve FROM is_currency WHERE 1';
        
        $Q = mysql_query($sql);
        $num_rows = mysql_num_rows($Q);
       
        while ($data = mysql_fetch_array($Q))
        {
               $mang[]=$data['c_reserve'];
        }
            	
        $result = "";
        foreach ($mang as $key => $list)
        {
            $result = $result."&".$list;
        }
        echo $result;
        mysql_close($link);
?>