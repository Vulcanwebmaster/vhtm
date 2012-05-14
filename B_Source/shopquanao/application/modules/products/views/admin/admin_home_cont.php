<?php
/* modules/views/admin/admin_home_cont.php */
// get the module name. We use this in the link. Then it will be used in kaimonokago controller to redirect to the module
$module=$this->uri->segment(1);
if (count($products))
{
	echo '<table id="tablesorter1" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
	echo "<thead><tr valign='top'>";
	echo "<th>".'ID Sản Phẩm</th><th>'.'Tên Sản Phẩm'.
            "</th><th>".'Mã Sản Phẩm'."</th><th>".'Số lượng'.
            "</th><th>".'Trạng thái'."</th><th>".'Loại sản phẩm'.
			"</th><th>".'Giá tiền'.
            "</th><th>".'Thực hiện'."</th>";
	echo "</tr></thead><tbody>";
	foreach ($products as $key => $list)
	{     
            // single language so display only lang_id ==0
           	if($list['lang_id']==0)
            	{
           // if($list['total']!=0)
           // {        
                echo "<tr ";
		        ($list['lang_id']>0)? $class="dentme" : $class = '';
				echo "class = \"".$class. "\" valign='top'>\n";
		       	// echo "<td align='center'>".form_checkbox('p_id[]',$list['id'],FALSE)."</td>";
				echo "<td align='center'>".$list['id']."</td>\n";
				echo "<td align='center'>";
		        //.$list['name'].
		        echo anchor('products/admin/edit/'.$list['id'],$list['name']);
		        echo "</td>\n";
		        echo "<td align='center'>".$list['code']."</td>\n";
		        echo "<td align='center'>".$list['total']."</td>\n";
		        //echo "<td align='center'>".$list['kho_code']."</td>\n";		        	
				echo "<td align='center'>";
				$active_icon = ($list['status']=='active'?'tick':'cross');
				echo anchor("kaimonokago/admin/changeStatus/$module/".$list['id'],$this->bep_assets->icon($active_icon), array('class' => $list['status']. ' changestatus'));
				echo "</td>\n";
				// echo "<td align='center'>".$list['category_id']."</td>\n";
				echo "<td align='center'>".$list['CatName']."</td>\n";
				echo "<td align='center'>".$list['price']."</td>\n";
		        //echo "<td align='center'>".$list['lang_id']."</td>\n";
		        //echo "<td align='center'>".$list['table_id']."</td>\n";
				echo "<td align='center'>";
				echo anchor('products/admin/edit/'.$list['id'],$this->bep_assets->icon('pencil'));
		        if ($list['status']=='inactive')
		        {
					//echo " | ";
					echo anchor("kaimonokago/admin/delete/$module/".$list['id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['name']."')"));
		        }
				echo "</td>\n";
				echo "</tr>\n";       
          // 	} //end kho_id
            } //end lang
		}           
	
	echo "</tbody></table>";
	
}//end count

else 
{
	echo '<table id="tablesorter1" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
	echo "<thead>\n<tr valign='top'>\n";
	echo '<table id="tablesorter1" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
	echo "<thead><tr valign='top'>";
	echo "<th>".'ID Sản Phẩm"</th>\n<th>'.'Tên Sản Phẩm'.
            "</th><th>".'Mã Sản Phẩm'."</th><th>".'Số lượng'.
            "</th><th>".'Trạng thái'."</th><th>".'Loại sản phẩm'.
			"</th><th>".'Giá tiền'.
            "</th><th>".'Thực hiện'."</th>";
	echo "</tr></thead><tbody>";
	echo "</table>";
}

?>