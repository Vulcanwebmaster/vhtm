<div id="contentmainright">
	<div class="l12323">
	<div class="mainright1">
		<img src="<?php echo base_url();?>assets/flash_game/images/Belote_52.png"/>
		<div class="ctmainrigt1">
			<p>40.000<br/>joueurs inscrits</p>
			<label>2.000 En Ligne</label>
		</div><br clear="both"/>
	</div>
	<style>
								.datetimeDIV{
									font-size: 11px;
									position: absolute;
									left: 27px;
									top: -1px;
									color: white
								}
							</style>
							<div id="topturnois">
								<p><img src="<?php echo base_url();?>assets/flash_game/images/row_03.png" /></p>
								<ul>
									<?php $i=1; foreach ($topgiaidau as $value) 
				 					{ ?>
									<li style="position:relative">
									<div class="datetimeDIV"><?php echo date("M",strtotime($value->start_date));?><br /><span style="color: red"><?php echo date("d",strtotime($value->start_date));?></span></div>
									<img src="<?php echo base_url();?>assets/flash_game/images/Belote<?php echo "_".$i; ?>.png"/> 
										<label><?php echo date("H:i",strtotime($value->start_date));?> <a href="<?php echo base_url()?>giaidau/detail/<?php echo $value->tour_id?>"><?php echo $value->name_tour?></a></label>
									</li>
									
									<?php $i++ ; } ?>
								</ul>
							</div>
	
	<div id="topjou">
		<p><img src="<?php echo base_url();?>assets/flash_game/images/row_06.png" /></p>
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
		<p><img src="<?php echo base_url();?>assets/flash_game/images/row_09.png"/></p>
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
		<li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_113.png"/></a></li>
		<li><a href="https://twitter.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_115.png"/></a></li>
		<li><a href="https://accounts.google.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_117.png"/></a></li>
		<li><a href="http://www.youtube.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_119.png"/></a></li>
	</ul>
</div>
</div>