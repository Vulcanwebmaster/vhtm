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
			<div id="printLink">
				<p><a href="javascript:pgPrint()">
					<?php if ($_SESSION['lang']=="fr") 
								{?>		
									imprimer
								<?php } else{ ?>
									print
								<?php } ?></a></p>
			</div>
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				<div class="container">
					<div>
						
						<p><strong>
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $list_general1->titlefr ?>
								<?php } else{ ?>
									<?php echo $list_general1->title ?>
								<?php } ?></strong></p>
						
						<p><strong>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $list_general1->contentfr ?>
								<?php } else{ ?>
									<?php echo $list_general1->content ?>
								<?php } ?></strong></p>
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
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $item->id."-".$item->alias;?>"><span>
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
			<h4 class="toggler"><span>Rules</span></h4>
			<div class="container" id="helpContainer303" style="display: none;">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
					
					<ul>
						<?php foreach ($list_category as $item) 
							{ ?>
							<li class="gameToggler"><span>
								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->category_namefr ?>
								<?php } else{ ?>
									<?php echo $item->category_name ?>
								<?php } ?></span>
							<ul class="gameElement" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;">
								<?php foreach ($list_rule as $key) 
								{ ?>
								<li><a href=""><span>
									<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $key->namefr ?>
								<?php } else{ ?>
									<?php echo $key->name ?>
								<?php } ?></span></a></li>
								<?php }?>
							</ul>
							</li>
						<?php }?>
						
				</ul>
			</div>
		</div>
	</div>
	<div class="contBox sideNav" id="contBox3">
		<h4 class="toggler"><span>
			<?php if ($_SESSION['lang']=="fr") 
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
		<h4 class="toggler"><span>
			<?php if ($_SESSION['lang']=="fr") 
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
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $item->id."-".$item->alias;?>"><span>
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