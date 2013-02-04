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
				 				<p><h4> Winnings Tournament</h4></p>
				 				
					 				<div style=" width: 40%; float: left">
				 					<p style="text-transform: uppercase;float: left"> Tournament <span style="color:red"></span></p>
					 				<input type="text" name="name_tour">
					 				<p style="text-transform: uppercase;">Games 
					 				<select name="game_id">
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
				 					</p>
					 				<p style="text-transform: uppercase"> Top1 <span style="color:red">%</span>
					 				<input type="text" name="top1"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 2 <span style="color:red">%</span>
					 				<input type="text" name="top2"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 3 <span style="color:red">%</span>
					 				<input type="text" name="top3"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 4 <span style="color:red">%</span>
					 				<input type="text" name="top4"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 5 <span style="color:red">%</span>
					 				<input type="text" name="top5"></p>
					 				<p style="text-transform: uppercase">Player<input type="text" name="players"></p>
					 				</div>
					 				
					 				<div>
					 				<p style="text-transform: uppercase"> Top 6 <span style="color:red">%</span>
					 				<input type="text" name="top6"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 7 <span style="color:red">%</span>
					 				<input type="text" name="top7"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 8 <span style="color:red">%</span>
					 				<input type="text" name="top8"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 9 <span style="color:red">%</span>
					 				<input type="text" name="top9"></p>
					 				
					 				<p style="text-transform: uppercase"> Top 10 <span style="color:red">%</span>
					 				<input type="text" name="top10"></p>
					 				<p style="text-transform: uppercase"> Start date <span style="color:red"></span>
					 				<input type="text" name="start_time"></p>
					 				
					 				<p style="text-transform: uppercase"> End date <span style="color:red"></span>
					 				<input type="text" name="end_time"></p>
					 				<p style="text-transform: uppercase;"> Winnings<input type="text" name="tienthuong">
					 				</div>
					 				<input type="submit" class="tuyet" value="Create" class="submitlh">
									</form>
				<style type="text/css">
					.tuyet{
						width: 100px;
						height: 50px;
						
					}
				</style>
</div>
<div id="sideBar"></div>
</div>
<script type="text/javascript">
	$('#pagehelp').addClass('active')
</script>