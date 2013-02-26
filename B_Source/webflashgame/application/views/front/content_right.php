<div id="contentmainright">
	<div class="l12323">
	<div class="mainright1">
		<img src="<?php echo base_url();?>assets/flash_game/images/Belote_52.png"/>
		<div class="ctmainrigt1">
		 	<p><?php echo $register ?><br/><?php if ($_SESSION['lang']=="fr"){
														 	 echo 'joueurs inscrits';
														 } else{
														 	echo 'registered players';
														  }?></p> 
			<label><?php echo $online ?> <?php if ($_SESSION['lang']=="fr"){
														 	 echo 'En Ligne';
														 } else{
														 	echo 'Online';
														  }?></label>
		</div><br clear="both"/>
	</div>
	<style>
								.datetimeDIV{
									font-size: 11px;
									position: absolute;
									left: 27px;
									top: -1px;
									color: white;
									width:20px;
									line-height:12px;
								}
							</style>
							<div id="topturnois">
								<p><?php if ($_SESSION['lang']=="fr"){
									 	echo 'Top Tournois';
									 } else{
									 	echo 'Top Tournament';
									  }?></p>
								<ul>
									<?php $i=1; foreach ($topgiaidau as $value) 
				 					{ ?>
									<li style="position:relative">
									<div class="datetimeDIV">
											<span><?php echo date("M",strtotime($value->start_date));?></span>
											<span style="color: red; clear: both"><?php echo date("d",strtotime($value->start_date));?></span>
									</div>
									<img src="<?php echo base_url();?>assets/flash_game/images/Belote<?php echo "_".$i; ?>.png"/> 
										<label style="margin-left: 0px"><?php echo date("H:i",strtotime($value->start_date));?> <a href="<?php echo base_url()?>giaidau/detail/<?php echo $value->tour_id."-".$value->alias;?>"><?php if ($_SESSION['lang']=="fr"){
														 	 echo $value->name_tourfr;
														 } else{
														 	echo $value->name_tour;
														  }?></a></label>
									</li>
									
									<?php $i++ ; } ?>
								</ul>
							</div>
	
	<div id="topjou">
		<p><?php if ($_SESSION['lang']=="fr"){
		 	echo 'Top Joueurs';
		 } else{
		 	echo 'Top Players';
		  }?>
		</p>
		<ul>
			<?php $i=1; foreach ($topwin as $value) 
			{ ?>
			<li class="c1">
				<img src="<?php echo base_url();?>assets/flash_game/images/Belote<?php echo "_".$i;?>.png"/>
				<label><?php echo $value->username ?> $<?php echo $value->money ?></label>
			</li>
			<?php  $i++ ; } ?>
		</ul>
	</div>
	<div id="belte">
		<p><?php if ($_SESSION['lang']=="fr"){
		 	echo 'Belote sur facebook';
		 } else{
		 	echo 'Belote on facebook';
		  }?>
		</p>
		<!-- <div class="faclide">
			<img src="<?php echo base_url();?>assets/flash_game/images/Belote_99.png"/>
			<div class="likef">
				<label style="color:#0184a3">Belote.com</label>
				<div style="margin-top:5px;">
					<img src="<?php echo base_url();?>assets/flash_game/images/Belote_102.png"/>
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
			<div class="fb-like-box" data-href="<?php echo $link_fanpage->linkface ?>"
				 data-width="268" data-height="210" data-show-faces="true" data-stream="false" data-header="false"></div>
	</div>
</div>
<div class="listgerular">
	<ul>
		<li><a href="<?php echo $link_fanpage->linkface ?>" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_113.png"/></a></li>
		<li><a href="<?php echo $link_fanpage->linktwitter ?>" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_115.png"/></a></li>
		<li><a href="<?php echo $link_fanpage->linkgoogle ?>" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_117.png"/></a></li>
		<li><a href="<?php echo $link_fanpage->linkyoutube ?>" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_119.png"/></a></li>
	</ul>
</div>
</div>