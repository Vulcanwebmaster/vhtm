<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	}
	
	#sideNav{
				/*float: left;
			    width: 294px;*/
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
</style>

<?php $this->load->view('front/menu')?>
<div id="main">
		<div id="container">
			<!-- <div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div> -->
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				
			</div>
		</div>
		<div id="sideNav">
		<script type="text/javascript">
			var SIDENAV_ACCORDION_NR1 = 0,
				SIDENAV_ACCORDION_NR2 = 0;
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#contBox2, #contBox3, #contBox4').children('.container').hide();
			$('#helpContainer85').show();
				$('#contBox1').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox2').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox1, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox1, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox3').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox1, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox1, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox4').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox1').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox1').children('.toggler').removeClass('active');
					
				});
				
			})
		</script>
		<form action="<?php echo base_url();?>setting/send" method="post" align="center">
				 				<p><h4>
				 					<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournoi gains
								<?php } else{ ?>
									Winnings Tournament
								<?php } ?> </h4></p>
				 				
					 		<div style=" width: 52%; float: left; margin-left:70px">
					 		<table>
				 						<tr>
				 							<td><p style="text-transform: uppercase;float: left"> 
				 								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournoi (en)
								<?php } else{ ?>
									 Tournament (en)
								<?php } ?> <span style="color:red"></span></p></td>
					 						<td><input type="text" name="name_tour"></td>
					 					</tr>
					 					
					 					<tr>
				 							<td><p style="text-transform: uppercase;float: left"> 
				 								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournoi (fr)
								<?php } else{ ?>
									 Tournament (fr)
								<?php } ?> <span style="color:red"></span></p></td>
					 						<td><input type="text" name="name_tourfr"></td>
					 					</tr>
					 					<!-- <tr>
					 						<td><p style="text-transform: uppercase;">Games</p> </td>	
					 						<td>
							 				<select name="game_id" style="width: 170px;">
												<option></option>
												<?php foreach ($list as $item)
													{
														if ($item->game_id == $info->game_id)
														{?>
															<option value="<?php echo $item->game_id?>" selected="selected"><?php echo $item->name;?></option>
														<?php }
														else {?>
															<option value="<?php echo $item->game_id?>"><?php echo $item->name;?></option>
												<?php }}?>
						 					</select>
						 					</td>
						 					
				 					</tr> -->
				 					<tr>
							 				<td><p style="text-transform: uppercase"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 1 
								<?php } else{ ?>
									 Top 1
								<?php } ?>   <span style="color:red">%</span></p></td>
							 				<td><input type="text" name="top1"></td>
							 		</tr>	
							 		<tr>	
							 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 2 
								<?php } else{ ?>
									 Top 2
								<?php } ?> <span style="color:red">%</span></p></td>
							 				<td><input type="text" name="top2"></td>
							 		</tr>	
							 		<tr>	
							 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 3 
								<?php } else{ ?>
									 Top 3
								<?php } ?>  <span style="color:red">%</span></p></td>
							 				<td><input type="text" name="top3"></td>
							 		</tr>
							 		<tr>	
							 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 4 
								<?php } else{ ?>
									 Top 4
								<?php } ?>  <span style="color:red">%</span></p></td>
							 				<td><input type="text" name="top4"></td>
							 		</tr>
							 		<tr>	
							 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 5 
								<?php } else{ ?>
									 Top 5
								<?php } ?>  <span style="color:red">%</span></p></td>
							 				<td><input type="text" name="top5"></td>
							 		</tr>
							 		<tr>
							 				<td ><p style="text-transform: uppercase"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Joueur
								<?php } else{ ?>
									 Player
								<?php } ?> </p></td>
							 				<td><input type="text" name="players"></td>
							 		</tr>
							 		
							 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Règles (en)
								<?php } else{ ?>
									Rules (en)
								<?php } ?>  <span style="color:red"></span></p></td>
									 				<td style="width: 100%"><textarea type="text" name="rules"></textarea></td>
									 		</tr>
					 	</table>
					 				</div>
					 				
					 				<div>
					 					<table>
					 						<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 6 
								<?php } else{ ?>
									 Top 6
								<?php } ?> <span style="color:red">%</span></p></td>
									 				<td><input type="text" name="top6"></td>
									 		</tr>		
									 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 7 
								<?php } else{ ?>
									 Top 7
								<?php } ?> <span style="color:red">%</span></p></td>
									 				<td><input type="text" name="top7"></td>
									 		</tr>	
									 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 8 
								<?php } else{ ?>
									 Top 8
								<?php } ?> <span style="color:red">%</span></p></td>
									 				<td><input type="text" name="top8"></td>
									 		</tr>	
									 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 9 
								<?php } else{ ?>
									 Top 9
								<?php } ?> <span style="color:red">%</span></p></td>
									 				<td><input type="text" name="top9"></td>
									 		</tr>	
									 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Haut 10 
								<?php } else{ ?>
									 Top 10
								<?php } ?> <span style="color:red">%</span></p></td>
									 				<td><input type="text" name="top10"></td>
									 		</tr>
									 		<tr>
									 				<td><p style="text-transform: uppercase"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Date de début
								<?php } else{ ?>
									 Start date
								<?php } ?>   <span style="color:red"></span></p></td>
									 				<td><input type="text" name="start_date" id="datetimepicker2"></td>
									 		</tr>	
									 		<tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Date de fin
								<?php } else{ ?>
									End date
								<?php } ?>  <span style="color:red"></span></p></td>
									 				<td><input type="text" name="end_date" id="datetimepicker1"></td>
									 		</tr>
									 		<tr>
									 				<td><p style="text-transform: uppercase;"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Gains
								<?php } else{ ?>
									Winnings
								<?php } ?> </p></td>
									 				<td><input type="text" name="tienthuong"></td>
									 		</tr>
									 		
									 
									 <tr>
									 				<td><p style="text-transform: uppercase"> <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Règles (fr)
								<?php } else{ ?>
									Rules (fr)
								<?php } ?>  <span style="color:red"></span></p></td>
									 				<td style="width: 100%"><textarea type="text" name="rulesfr"></textarea></td>
									 		</tr>
					 					</table>
					 				</div>
					 				<?php if ($_SESSION['lang']=="fr") 
									{?>
					 				<input type="submit" class="tuyet" value="Créer" class="submitlh">
					 				<?php } else{ ?>
					 				<input type="submit" class="tuyet" value="Create" class="submitlh">
					 				<?php } ?>
									</form>
				<style type="text/css">
					.tuyet{
						width: 100px;
						height: 50px;
						
					}
					.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
					.ui-timepicker-div dl { text-align: left; }
					.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
					.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
					.ui-timepicker-div td { font-size: 90%; }
					.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
					
					.ui-timepicker-rtl{ direction: rtl; }
					.ui-timepicker-rtl dl { text-align: right; }
					.ui-timepicker-rtl dl dd { margin: 0 65px 10px 10px; }
				</style>
</div>
<div id="sideBar"></div>
</div>
<script type="text/javascript">
	$('#pagehelp').addClass('active')
</script>
	<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.0/themes/smoothness/jquery-ui.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.0/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/flash_game/js/jquery-ui-sliderAccess.js"></script>
		<script>
		$('#datetimepicker1').datetimepicker();
		</script>
		<script>
		$('#datetimepicker2').datetimepicker();	
		</script>