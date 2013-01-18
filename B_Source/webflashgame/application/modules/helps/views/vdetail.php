<script type="text/javascript">
			var SIDENAV_ACCORDION_NR1 = 0,
				SIDENAV_ACCORDION_NR2 = 0;
		</script>
<div id="container">
			<div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div>
			
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				<?php foreach ($items as $item) 
							{ ?>
				<h3><span><?php echo $item->title;?></span></h3>
				<div class="container">
					
					<div>
						<p>
							<?php echo $item->description;?></p>
						<p></p>
					</div>
					
				</div><?php } ?>
			</div>
		</div>
		<style>
			#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		</style>
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
		<?php foreach ($items as $key) 
				{ ?>
		<div class="contBox sideNav" id="contBox1">
			<h4 class="toggler active" style="cursor: default;"><span><?php echo $key->type; ?></span></h4>
			<div class="container opened" id="helpContainer85" style="">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;">
					<ul>
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $key->id."-".$key->alias;?>"><span><?php echo $key->title;?></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }?>
</div>
<div id="sideBar"></div>