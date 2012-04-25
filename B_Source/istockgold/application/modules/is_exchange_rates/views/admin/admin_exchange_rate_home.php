<div id="main">
	<div id="page_title">
		<h1>
			Exchange Rates</h1>
	</div>
	<style type="text/css">
		TH
		{
			background-color: #F8FAF9;
			cursor: default;
		}
		.tablefirstrow, .tablefirstrow td
		{
			padding: 2px;
			line-height: 18px !important;
		}
		select, input
		{
			font-size: 11px;
			height: 16px;
		}
		#main
		{
			position: absolute;
			top: 240px;
			left: 5px;
			z-index: 10;
			margin: 3%;
		}
		#left
		{
			visibility: hidden;
		}
	</style>
	<?php print anchor('is_admin_home/admin','<img src="'.base_url().'assets/images/admin/n_status.gif" width="18" height="16" border="0" />'.$this->lang->line('istockgold_admin_home'))?> 
	<?php print anchor('currency/admin','<img src="'.base_url().'assets/images/admin/n_order_set.png" width="18" height="18" border="0" />'.$this->lang->line('istockgold_exchange_settings')) ?> 
	<?php print anchor('is_site_currencies/admin','<img src="'.base_url().'assets/images/admin/n_currencies.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_site_currencies')) ?>
	<?php print anchor('is_site_settings/admin','<img src="'.base_url().'assets/images/admin/n_settings.gif" width="19" height="18" border="0" />'.$this->lang->line('istockgold_site_settings')) ?>
	<?php 
		$array_rates = array();
		if(count($rates))
		{
			foreach ($rates as $key => $list)
			{
				$array_rates[$list['c_id_src']][$list['c_id_dst']] = $list['rate_dst'];
			}
		}
		
		echo "<div id=\"status_box\"><form id=\"form1\" name=\"form1\" method=\"post\" action=\"".base_url()."index.php/is_exchange_rates/admin/update\">";
		echo "<table width=\"99%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" class=\"rates\" style=\"background-color: #F3F3F3\">";
		
		if(count($currencies))
		{
			echo "<thead>";
			echo "<th class=\"tablefirstrow\" style=\"text-align: center\">To / From</th>";
			$cnt_currencies = 0;
			foreach ($currencies as $key => $title)
			{
				echo "<th nowrap=\"\" class=\"tablefirstrow\" style=\"font-size: 11px; text-align: center\">".
					 $title['c_name']."<br>(".$title['c_metal_name'].")</th>";
				$cnt_currencies = $cnt_currencies + 1;
			}
			echo "</thead>";
			
			
			echo "<tbody>";
			$i = 0;

			foreach ($currencies as $key => $row)
			{
				if ($i % 2 == 0) 
					echo "<tr class=\"col1\">";
				else
				 	echo "<tr class=\"col0\">";
				
 				$j = 0;	
				foreach ($currencies as $key => $column)
				{
					if($j == 0)
					{
						echo "<td class=\"tablefirstrow\" style=\"font-size: 11px; text-align: center;\">".
						$row['c_name']."<br>".$row['c_metal_name']."</td>";	
					}
					
					if ($i == $j)
						echo "<td><input type=\"hidden\" name=\"tb_".$row['c_id']."_".$column['c_id']."\" value=\"-\">&nbsp;</td>";
					else
						echo "<td><input type=\"text\" size=\"10\" name=\"tb_".$row['c_id']."_".$column['c_id']."\" value=\"1:".$array_rates[$row['c_id']][$column['c_id']]."\"></td>";
					$j = $j + 1;
					
					if($j == $cnt_currencies )
					{
						echo "<td class=\"tablefirstrow\" style=\"font-size: 11px; text-align: center;\">".
						$row['c_name']."<br>".$row['c_metal_name']."</td>";	
					}
					
				}
				echo "</tr>";
				$i = $i + 1;	
			}
			echo "</tbody>";
			
			echo "<thead>";
			echo "<th class=\"tablefirstrow\" style=\"text-align: center\">To / From</th>";
			foreach ($currencies as $key => $title)
			{
				echo "<th nowrap=\"\" class=\"tablefirstrow\" style=\"font-size: 11px; text-align: center\">".
					 $title['c_name']."<br>(".$title['c_metal_name'].")</th>";
			}
			echo "</thead>";
		}
		echo "</table>";
		echo "<input name=\"Action\" type=\"hidden\" id=\"Action\" value=\"Save\">
			<center><input type=\"submit\" name=\"Submit\" value=\"Update All Exchange Rates\" class=\"btn\"></center>
			</form>
			</div><br>";
	?>
</div>