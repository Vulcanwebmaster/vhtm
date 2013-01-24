
			<!---------------------------left-------------------->
			<div id="sideNav" style="float:left;width:294px;margin-left:-942px;position:relative">
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
							<li <?php if(isset($menuleft)){if($menuleft==5){ echo "class='active'"; }} ?>><a href="<?php echo base_url();?>mygametwist/twistsoverview"><span>Twists overview</span></a></li>
							<li <?php if(isset($menuleft)){if($menuleft==6){ echo "class='active'"; }} ?>><a href="<?php echo base_url();?>mygametwist/subscriptionoverview"><span>Subscription Overview</span></a></li>
							<li <?php if(isset($menuleft)){if($menuleft==7){ echo "class='active'"; }} ?>><a href="<?php echo base_url();?>mygametwist/statistics"><span>Statistics</span></a></li>
							<li><a href="<?php echo base_url();?>shop"><span>Get Twists/Subscriptions</span></a></li>
							<li <?php if(isset($menuleft)){if($menuleft==8){ echo "class='active'"; }} ?>><a href="<?php echo base_url();?>mygametwist/vouchers"><span>Voucher</span></a></li>
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