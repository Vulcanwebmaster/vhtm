			<!---------------------------left-------------------->
			<div id="sideNav">
				<div class="contBox sideNav">
					<h4><span>Settings</span></h4>
					<div class="container">
						<ul>
							<li id="btnSettingsPersonal" <?php if(isset($menuleft)){if($menuleft==0){ echo "class='active'"; }} ?> ><a href="<?php echo base_url();?>mygametwist/personaldata"><span>Personal data</span></a></li>
							<li id="btnSettingsPassword" <?php if(isset($menuleft)){if($menuleft==1){ echo "class='active'"; }} ?> ><a href="<?php echo base_url();?>mygametwist/changepass"><span>Change password</span></a></li>
							<li id="btnSettingsGlobal" 	 <?php if(isset($menuleft)){if($menuleft==2){ echo "class='active'"; }} ?> ><a href="<?php echo base_url();?>mygametwist/gamesetting"><span>Game settings</span></a></li>
							<li id="btnSettingsMessage"	 <?php if(isset($menuleft)){if($menuleft==3){ echo "class='active'"; }} ?> ><a href="<?php echo base_url();?>mygametwist/generalsetting"><span>General settings</span></a></li>
							<li id="btnSettingsCurrency" <?php if(isset($menuleft)){if($menuleft==4){ echo "class='active'"; }} ?> ><a href="<?php echo base_url();?>mygametwist/currencysetting"><span>Currency</span></a></li>
						</ul>
					</div>
				</div>
				<div class="contBox sideNav">
					<h4><span>My Account</span></h4>
					<div class="container">
						<ul>
							<li><a href="#"><span>Twists overview</span></a></li>
							<li><a href="#"><span>Subscription Overview</span></a></li>
							<li><a href="#"><span>Statistics</span></a></li>
							<li><a href="#"><span>Get Twists/Subscriptions</span></a></li>
							<li><a href="#"><span>Voucher</span></a></li>
						</ul>
					</div>
				</div>
				<div class="contBox sideNav">
					<h4><span>My Friends</span></h4>
					<div class="container">
						<ul>
							<li><a href="#"><span>Friends List</span></a></li>
							<li><a href="#"><span>Ignore List</span></a></li>
							<li><a href="#"><span>Invite friends</span></a></li>
						</ul>
					</div>
				</div>
				<div class="contBox sideNav">
					<h4><span>Messages</span></h4>
					<div class="container">
						<ul>
							<li><a href="#"><span>Write message</span></a></li>
							<li><a href="#"><span>Inbox</span></a></li>
							<li><a href="#"><span>Outbox</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="sideBar"></div>
<!---------------------------End left-------------------->