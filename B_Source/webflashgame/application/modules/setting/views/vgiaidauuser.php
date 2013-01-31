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
				
				<!-- <div class="container">
					<div>
						<p><strong>In the help menu you will find;</strong></p>
						<ul>
							<li><strong>game instructions,</strong></li>
							<li><strong>
		an introduction to our website and</strong></li>
							<li><strong>answers to frequently asked questions (FAQs)</strong></li>
						</ul>
						<strong>
covering all games and functions available at GameTwist.<br><br>
Should you have any further questions, please do not hesitate to contact our support team at <a href="#">support@gametwist.com</a>.<br><br>
Our support hotline is available 7 days a week (excl. public holidays) from 8am to 10pm:<br>
						<ul>
							<li><b>Germany: </b><strong>0900 141 0 141</strong> (�1.80/min.)</li>
							<li><b>Austria: 0900 499 944</b> (�1.80/min.)</li>
						</ul><br>
Prices given are from landline telephones. Prices for calls from cell phones may be higher.<br></strong>
						<p></p>
					</div>
				</div> -->
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
					 				<div style="float:left"><p style="text-transform: uppercase"> Web <span style="color:red">%</span>
					 				<input type="text" name="phantramweb"></p>
					 				
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
					 				
					 				<p style="text-transform: uppercase"> User<span style="color:red">%</span>
					 				<input type="text" name="user_gold">
					 				</div>
					 				<input type="submit" class="tuyet" value="Send" class="submitlh">
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