<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	
	}
	
	#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		#container{
			float: left;
			width: 648px;
		}
			
</style>
<script type="text/javascript">
    $(document).ready(function(){
     $('body').addClass('tournaments_details tournaments_ uc hasSideBar tournStatus_2 noLeaderBoard root chrome, game_uc').removeClass('game_default');
    })
   </script>
<?php $this->load->view('front/menu')?>
<div id="main">
			<div id="container">
				<div id="tipHolder"></div>
				<style type="text/css">
					#backgroundHack {
						background-color: #9b06e9;
						color: #ffffff;
					}
					
					#tournDetails,
					#tournDetails h3,
					#tournDetails a,
					#sideBar .tournStartIn {
						color: #ffffff;
					}

					#tournDetails abbr,
					#tournDetails .container,
					#tournDetails h3,
					#gameHeader .date,
					#sideBar .tournStartIn {
						border-color: #ffffff;
					}
				</style>
				<div id="tournamentsDetailsStatus">
					<span class="to1Status typeId typeId0" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;"></span>
				</div>
				<div id="backgroundHack"></div>
				<span class="detailsBackground" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/backgroundHackCutted.png);"></span>
				<style type="text/css">
					.tuyet p img{
						width: 303px !important;
						height: 103px !important;
						position: absolute;
						left: 0px !important;
						top: -23px !important;
					}
				</style> 
	
				<div id="tournamentsDetailsHeader" class="contBox">
					<div id="gameHeader" class="game_8 tuyet">
						<div class="rating2 ">
							<span class="gameHeaderStars" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameHeaderStars.png);"></span>
							rating: 2
						</div>
							<?php echo $list_chitiet->image ?>
<!-- 						<span class="gameHeaderLogo" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_8_logo_220x100_EN-US.png);"></span> -->
						<div class="date">
							<div><?php echo date("M",strtotime($list_chitiet->start_date));?><span><?php echo date("d",strtotime($list_chitiet->start_date));?></span></div>
							<strong class="tournCufon"><?php echo date("H:i",strtotime($list_chitiet->start_date));?></strong>
						</div>
					</div>
					<div id="gameShot">
						<img alt="Crazy Eights" src="<?php echo base_url();?>assets/flash_game/images/game_8_gameshot_260x160.jpg">
						<dl class="tournCufon">
							<dt>Jackpot</dt>
							<dd><span class="funCurrencyContainer"><span>Twists </span>37.500<!-- <?php echo $key->tienthuong ?> --></span></dd>
						</dl>
					</div>
				</div>
				<div id="tournDetails">
					<div class="contBox tournDetails">
						<h3><?php echo $list_chitiet->name_tour?></h3>
						<div class="container" style="height: 120px;">
							<dl>
								<dt class="stake">Stake:</dt>
								<dd class="stake">Free</dd>
								<dt>Start:</dt>
								<dd><?php echo date("m-d-Y H:i",strtotime($list_chitiet->start_date));?><abbr title="Central European Time"> CET</abbr></dd>
								<dt>End:</dt>
								<dd><?php echo date("m-d-Y H:i",strtotime($list_chitiet->end_date));?><abbr title="Central European Time"> CET</abbr></dd>
								<dt>Status:</dt>
								<dd><?php if(date('Y-m-d H:i:s') < date("m-d-Y H:i",strtotime($list_chitiet->start_date))){
									echo 'Over' ;
								}else{ echo 'Not started'; } ?></dd>
								<dt>Players:</dt>
								<dd><?php echo $listPlayer ?></dd>
								<!-- <dt>Free space:</dt>
								<dd><?php echo $listPlayer ?>607</dd> -->
								<dt>My status:</dt>
								<dd><?php  if($checkStatus){
										 echo 'Registed';
									 }else{
									 	echo 'Not Register';
									 } ?></dd>
								<dt></dt>
								<dd class="link">								
									<a id="tournamentsReg" href="#"><span>Register now!</span></a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="contBox topJackpot">
						<h3>Share of jackpot</h3>
						<div class="container">
							<div class="item pos_1">
								<h3>1.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span><?php echo $setting_chitiet->phantramweb ?></span></span></strong>
							</div>
							<div class="item pos_2">
								<h3>2.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span><?php echo $setting_detail->top2 ?>,000</span></span></strong>
							</div>
							<div class="item pos_3">
								<h3>3.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span><?php echo $setting_detail->top4 ?>,000</span></span></strong>
							</div>
						</div>
					</div>
				</div>
				<div id="subNav" class="light">
					<ul>
						<li id="btnTo3Details" class="active">
							<a rel="ax:/details"><span>Details</span></a>
						</li>
						<li id="btnTo3Rules" class=""><a rel="ax:/rules"><span>Tournament rules</span></a></li>
						<li id="btnTo3Ranking" class="interceptLinks "><a rel="ax:/ranking"><span>Player list</span></a></li>
					</ul>
				</div>
				<style>
					#subNav a{ cursor:poiter;}
				</style>
				<script type="text/javascript">
				$(document).ready(function(){
					$('.content1').show();				
				$('.content2, .content3').hide();
					$('#btnTo3Details').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content1').show();
						$(this).parent().parent().parent().children('.content2, .content3').hide();
						$(this).parent().children('#btnTo3Rules, #btnTo3Ranking').removeClass('active');
					});
					$('#btnTo3Rules').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content2').show();
						$(this).parent().parent().parent().children('.content1, .content3').hide();
						$(this).parent().children('#btnTo3Details, #btnTo3Ranking').removeClass('active');
					});
					$('#btnTo3Ranking').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content3').show();
						$(this).parent().parent().parent().children('.content2, .content1').hide();
						$(this).parent().children('#btnTo3Details, #btnTo3Rules').removeClass('active');
					});
				});
				</script>
				<div class="contentTop"></div>
				<div id="content" class="content1" style="">
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<span style="font-weight: bold;"><?php echo $list_chitiet->name_tour ?><a target="_blank" href="#">Twists:</a></span>
								</td>
							</tr>    
						</tbody>
					</table>
					<p></p>
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<img width="128" height="178" alt="" src="<?php echo base_url();?>assets/flash_game/images/winnerposition.jpg"></td>             
								<td>             
									<p><?php echo $list_chitiet->detail ?></p>             
								</td>             
							</tr>    
						</tbody>
					</table>
					<p></p>
				</div>
				<div id="content" class="content2" style="display: none;">
					<div class="contBox">
						<h3><span><?php echo $list_chitiet->name_tour ?></span></h3>
						<div class="container" id="tournRules">
							<?php echo $list_chitiet->rules ?>
						</div>
					</div>
				</div>
				<div id="content" class="content3" style="display: none;">
					<div id="tournRanking" class="contBox">
						<h3><span>Tournament details&nbsp;-&nbsp;<?php echo $list_chitiet->name_tour ?></span></h3>
						<div class="container">
							<table class="listTable">
								<colgroup>
									<col class="first">
										<col class="second">
											<col class="third">
												<col class="fourth">
													<col class="fifth">
														<col class="sixth">
															<col class="seventh">
								</colgroup>
								<thead>
									<tr>
										<th class="first">Place</th>
										<th>Players</th>
										<th>Points</th>
										<th>Games</th>
										<th>Won</th>
										<th class="">Lost</th>
										<th class="last">Winnings</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td class="first"></td>
										<td colspan="5"></td>
										<td class="last"></td>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach ($list_player as $item) 
									{ ?>
									<tr class="dark">
										<td> - </td>
										<td><?php echo $item->username ?></td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<ul class="paging">
								<li class="prev inactive"><a data-gtt="Previous page" title=""><span>Previous page</span></a></li>
								<li>
									<ol>
										<li class="active"><a href="#" data-gtt="Page&nbsp;1" title=""><span>Page&nbsp;1</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;2" title=""><span>Page&nbsp;2</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;3" title=""><span>Page&nbsp;3</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;4" title=""><span>Page&nbsp;4</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;5" title=""><span>Page&nbsp;5</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;6" title=""><span>Page&nbsp;6</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;7</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;8</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;9</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;10" title=""><span>Page&nbsp;10</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;11</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;12</span></a></li>										
									</ol>
								</li>
								<li class="next inactive">
									<a href="#" data-gtt="Next page" title=""><span>Next page</span></a>
								</li>
								<li class="total"><span>1&nbsp;-&nbsp;20&nbsp;of&nbsp;395</span></li>
							</ul>
						</div>
					</div>
				</div>			
				<div class="contentBottom"></div>
			</div>
			<div id="sideNav"></div>
			<div id="sideBar">
				<script type="text/javascript">
				window.addEvent('load', function () {
					$('sideBar').getElements('input[type="text"][title], input[type="password"][title]').each(function (item) {
						if (item.value == '')																							   
							new OverText(item);
					});
				});
		</script>
			<div class="contBox" id="sideBarLogin">
			<h3><span>
				<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Connexion
								<?php } else{ ?>
									Log In
								<?php } ?></span></h3>
			<form method="post" enctype="" name="fnLogin" id="fnLogin" class="container" action="<?php echo base_url()?>dangky/checkAccount">
				<table>
					<tbody><tr>
						<td><input type="text" name="nick" id="lNick1" title="Nickname" value="Nickname" onblur="if(this.value=='') this.value='Nickname';" onfocus="if(this.value=='Nickname') this.value='';"></td>
						<td>
							<input type="password" name="pass" id="lPass1" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';">
							
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input name="autologin" type="checkbox" id="autologin2" value="1" class="ffCheckbox">
							<label for="autologin2">
								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Rester identifié
								<?php } else{ ?>
									Stay logged in
								<?php } ?></label>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button name="submit" type="submit" class="formButton fbSubmit" id="landingSend">
							<span>
								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Connexion
								<?php } else{ ?>
									Log In
								<?php } ?></span>
							</button>
						</td>
					</tr>
					</tbody>
				</table>
			</form>
		</div>
			<div id="trust" class="contBox">
				<h3>Simple &amp; Secure</h3>
				<div class="container">
					<div class="trust">
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$('#pagetournament').addClass('active')
</script>