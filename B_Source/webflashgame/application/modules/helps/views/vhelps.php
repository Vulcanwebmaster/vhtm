<style>
	#main{
		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;
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

<div id="nav" class="">
			<ul>
				<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
				<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
				<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>dangky/dangnhap" title=""><span>My GameTwist</span></a></li>
				<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
				<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
			</ul>
			<a id="backToTop" href="#"></a>
		</div>
<div id="main">
		<div id="container">
			<div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div>
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				<div class="container">
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
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $item->id."-".$item->alias;?>"><span><?php echo $item->title?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="contBox sideNav" id="contBox2">
			<h4 class="toggler"><span>Rules</span></h4>
			<div class="container" id="helpContainer303" style="display: none;">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
					
					<ul>
						<?php foreach ($list_category as $item) 
							{ ?>
							<li class="gameToggler"><span><?php echo $item->category_name ?></span>
							<ul class="gameElement" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
								<?php foreach ($list_rule as $key) 
								{ ?>
								<li><a href=""><span><?php echo $key->name ?></span></a></li>
								<?php }?>
							</ul>
							</li>
						<?php }?>
						<!--<?php foreach ($list_courses_cate as $key) { ?>
																<div><?php echo $key->cate_name ?>
																	<div class="slidemove">
																		<?php foreach ($list_courses as $value) {?>
																		<?php if($value->courses_category  ==  $key->id)
																					{?>
																		<ul class="inside">
																		<li><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $value->courses_id."-".$value->alias;?>"><?php echo $value->courses_name ?></a></li>
																		</ul>
																		<?php } ?>
																		<?php } ?>
																	</div>
																</div>
														<?php } ?>-->
				</ul>
			</div>
		</div>
	</div>
	<div class="contBox sideNav" id="contBox3">
		<h4 class="toggler"><span>General Help</span></h4>
		<div class="container" id="helpContainer1" style="display: none;">
			<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
				<ul>
					<li><a href="/help.asp?id_topic=257&amp;id_article=920"><span>Country Selection</span></a></li>
					<li><a href="/help.asp?id_topic=86&amp;id_article=1290"><span>Player Evaluation</span></a></li>
					<li><a href="/help.asp?id_topic=84&amp;id_article=204"><span>User Tournament</span></a></li>
					<li><a href="/help.asp?id_topic=390&amp;id_article=1573"><span>Loss of Connection</span></a></li>
					<li><a href="/help.asp?id_topic=23&amp;id_article=178"><span>Rules of Conduct</span></a></li>
					<li><a href="/help.asp?id_topic=80&amp;id_article=1289"><span>Room System</span></a></li>
					<li><a href="/help.asp?id_topic=814&amp;id_article=5896"><span>Games with ranking</span></a></li>
					<li><a href="/help.asp?id_topic=128&amp;id_article=2845"><span>Tournaments</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="contBox sideNav" id="contBox4">
		<h4 class="toggler"><span>Technical Help</span></h4>
		<div class="container" id="helpContainer22" style="display: none;">
			<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
			<ul>
				<li><a href="/help.asp?id_topic=425&amp;id_article=2035"><span>Black Game Window</span></a></li>
				<li><a href="/help.asp?id_topic=294&amp;id_article=1079"><span>Java/Flash</span></a></li>
				<li><a href="/help.asp?id_topic=424&amp;id_article=2036"><span>Java Download</span></a></li>
				<li><a href="/help.asp?id_topic=426&amp;id_article=2037"><span>Flash Download</span></a></li>
				<li><a href="/help.asp?id_topic=122&amp;id_article=5870"><span>Login</span></a></li>
			</ul>
		</div>
		</div>
	</div>
</div>
<div id="sideBar"></div>
</div>