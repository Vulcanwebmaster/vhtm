<?php
/* modules/views/admin/admin_home_cont.php */
// get the module name. We use this in the link. Then it will be used in kaimonokago controller to redirect to the module
$module=$this->uri->segment(1);

if (count($products))
{
    
?>

<div align="left">
<form name = "formkho" method="post" action="<?php echo base_url()?>index.php/products/admin/sortKho">
<select name = "giatrikho" onchange = "formkho.submit();">
	<option value="0">Chon Kho:</option>
	<option value="1">Kho 1</option>
	<option value="2">Kho 2</option>
	<option value="3">Kho 3</option>
</select>
</form>
</div>

 <div align="right" style="float:right">
	<?php echo $pagination;?>                   
</div>

<br/>

<?php
	echo '<table id="tablesorter1" class="tablesorter" border="1" cellspacing="0" cellpadding="3" width="100%">';
	echo "<thead>\n<tr valign='top'>\n";
	echo "<th>".$this->lang->line('kago_productid')."</th>\n<th>".$this->lang->line('kago_name').
            "</th><th>".$this->lang->line('kago_code')."</th><th>".$this->lang->line('kago_status')."</th><th>".$this->lang->line('kago_catname').
			"</th><th>".$this->lang->line('kago_featured')."</th><th>".$this->lang->line('kago_price').
            "</th><th>".$this->lang->line('kago_lang')."</th><th>".$this->lang->line('kago_table_id').
            "</th><th>".$this->lang->line('kago_actions')."</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach ($products as $key => $list)
	{
        if($this->preference->item('multi_language')==1)
        { 
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
			echo "<td align='center'>";
			$active_icon = ($list['status']=='active'?'tick':'cross');
			echo anchor("kaimonokago/admin/changeStatus/$module/".$list['id'],$this->bep_assets->icon($active_icon), array('class' => $list['status']. ' changestatus'));
			echo "</td>\n";
			// echo "<td align='center'>".$list['category_id']."</td>\n";
			
			echo "<td align='center'>".$list['CatName']."</td>\n";
			echo "<td align='center'>".$list['featured']."</td>\n";
			echo "<td align='center'>".$list['price']."</td>\n";
			if($list['langname'])
			{
			    $langname = ucfirst($list['langname']);
			}
			else
			{
			    $langname = 'English';
			}
			echo "<td align='center'>$langname</td>\n";
			//echo "<td align='center'>".$list['lang_id']."</td>\n";
			echo "<td align='center'>".$list['table_id']."</td>\n";
			echo "<td align='center'>";
			echo anchor('products/admin/edit/'.$list['id'],$this->bep_assets->icon('pencil'));
			if ($list['status']=='inactive')
			{
				//echo " | ";
				echo anchor("kaimonokago/admin/delete/$module/".$list['id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['name']."')"));
			}
			echo "</td>\n";
			echo "</tr>\n";
		}
		else
		{
            // single language so display only lang_id ==0
           	if($list['lang_id']==0)
            	{        
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
				echo "<td align='center'>";
				$active_icon = ($list['status']=='active'?'tick':'cross');
				echo anchor("kaimonokago/admin/changeStatus/$module/".$list['id'],$this->bep_assets->icon($active_icon), array('class' => $list['status']. ' changestatus'));
				echo "</td>\n";
				// echo "<td align='center'>".$list['category_id']."</td>\n";
				echo "<td align='center'>".$list['CatName']."</td>\n";
				echo "<td align='center'>".$list['featured']."</td>\n";
				echo "<td align='center'>".$list['price']."</td>\n";
		        if($list['langname'])
		        {
		            $langname = ucfirst($list['langname']);
		        }
		        else
		        {
		            $langname = 'English';
		        }
		        echo "<td align='center'>$langname</td>\n";
		        //echo "<td align='center'>".$list['lang_id']."</td>\n";
		        echo "<td align='center'>".$list['table_id']."</td>\n";
				echo "<td align='center'>";
				echo anchor('products/admin/edit/'.$list['id'],$this->bep_assets->icon('pencil'));
		        if ($list['status']=='inactive')
		        {
					//echo " | ";
					echo anchor("kaimonokago/admin/delete/$module/".$list['id'],$this->bep_assets->icon('delete'),array("onclick"=>"return confirmSubmit('".$list['name']."')"));
		        }
				echo "</td>\n";
				echo "</tr>\n";       
           } 
		}           
	}
	echo "</tbody></table>";
	
}//end count

?>