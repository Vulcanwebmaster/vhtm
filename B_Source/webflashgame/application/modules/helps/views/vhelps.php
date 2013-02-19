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
</style>

<?php $this->load->view('front/menu')?>
<div id="main">
		<div id="container">
			<!-- <div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div> -->
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				
				<div class="l12323" style="width: 309px !important;
float: right !important;">
							<div class="mainright1">
								<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_52.png">
								<div class="ctmainrigt1">
									<p>40.000<br>joueurs inscrits</p>
									<label>2.000 En Ligne</label>
								</div><br clear="both">
							</div>
							<div id="topturnois">
								<p><img src="http://localhost/webflashgame/assets/flash_game/images/row_03.png"></p>
								<ul>
									<li>
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_74.png">
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_78.png">
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_80.png">
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_82.png">
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
								</ul>
							</div>
							
							<div id="topjou">
								<p><img src="http://localhost/webflashgame/assets/flash_game/images/row_06.png"></p>
								<ul>
									<li class="c1">
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_74.png">
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c2">
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_78.png">
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c2">
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_80.png">
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c1">
										<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_82.png">
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
								</ul>
							</div>
							<div id="belte">
								<p><img src="http://localhost/webflashgame/assets/flash_game/images/row_09.png"></p>
								<!-- <div class="faclide">
									<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_99.png"/>
									<div class="likef">
										<label style="color:#0184a3">Belote.com</label>
										<div style="margin-top:5px;">
											<img src="http://localhost/webflashgame/assets/flash_game/images/Belote_102.png"/>
											<label style="padding-top:5px">You like this</label>
										</div>
									</div><br clear="both"/>
								</div> -->
								<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/en/all.js#xfbml=1";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like-box" data-href="http://www.facebook.com/NiwVietNam" data-width="268" data-height="210" data-show-faces="true" data-stream="false" data-header="false"></div>
							</div>
						</div>
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
		<div class="contBox sideNav" id="contBox1">
			<h4 class="toggler active" style="cursor: default;"><span>FAQs</span></h4>
			<div class="container opened" id="helpContainer85" style="">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;">
					<ul>
						<?php foreach ($list_faq as $item) 
							{ ?>
						<li><a href="<?php echo base_url();?>helps/faqs/<?php echo $item->id."-".$item->alias;?>"><span>
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->titlefr?>
								<?php } else{ ?>
									<?php echo $item->title?>
								<?php } ?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="contBox sideNav" id="contBox2">
			<h4 class="toggler"><span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Aide des jeux
								<?php } else{ ?>
									Rules
								<?php } ?></span></h4>
			<div class="container" id="helpContainer303" style="display: block;">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
					<ul>
						<?php foreach ($list_category as $key) 
						{ ?>
						<li class="gameToggler active" style="cursor: default;"><span><?php echo $key->category_name;?></span>
							<ul class="gameElement" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;">
								<?php foreach ($list_games as $value) {?>
										<?php if($value->category_id  ==  $key->id)
											{?>
								<li><a href="<?php echo base_url();?>helps/rules/<?php echo $value->game_id."-".$value->alias;?>"><span>
									<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $value->namefr; ?>
								<?php } else{ ?>
									<?php echo $value->name; ?>
								<?php } ?></span></a></li>
								<?php } ?>
							<?php } ?>
							</ul>
						</li>
						<?php }?>
						
				</ul>
			</div>
		</div>
			
	</div>
	<div class="contBox sideNav" id="contBox3">
		<h4 class="toggler"><span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Aide générale
								<?php } else{ ?>
									General Help
								<?php } ?></span></h4>
		<div class="container" id="helpContainer1" style="display: none;">
			<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
				<ul>
						<?php foreach ($list_general as $item) 
							{ ?>
						<li><a href="<?php echo base_url();?>helps/general/<?php echo $item->id."-".$item->alias;?>"><span>
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->titlefr?>
								<?php } else{ ?>
									<?php echo $item->title?>
								<?php } ?></span></a></li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</div>
	<div class="contBox sideNav" id="contBox4">
		<h4 class="toggler"><span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Aide technique
								<?php } else{ ?>
									Technical Help
								<?php } ?></span></h4>
		<div class="container" id="helpContainer22" style="display: none;">
			<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
			<ul>
				<?php foreach ($list_technical as $item) 
							{ ?>
						<li><a href="<?php echo base_url();?>helps/technical/<?php echo $item->id."-".$item->alias;?>"><span>
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->titlefr?>
								<?php } else{ ?>
									<?php echo $item->title?>
								<?php } ?></span></a></li>
						<?php } ?>
			</ul>
		</div>
		</div>
	</div>
</div>
<div id="sideBar"></div>
</div>
<script type="text/javascript">
	$('#pagehelp').addClass('active')
</script>