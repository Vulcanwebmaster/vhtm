<!-- 
	<?php if(!isset($_SESSION['front_user_fullname'])){ ?>
		<div id="status1">
			<div class="login">
	          <form method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url()?>dangky/checkAccount">
	            <ul>
	              <li class="nick"><input type="text" name="nick" id="lNick1" title="Nickname" value="Nickname" onblur="if(this.value=='') this.value='Nickname';" onfocus="if(this.value=='Nickname') this.value='';"></li>
	              <li class="password"><input type="password" name="pass" id="lPass1" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"></li>
	              <li class="login"><button type="submit" class="fbSubmit"><span><cufon class="cufon cufon-canvas" alt="Log" style="width: 27px; height: 12px;"><cufontext>Log In</cufontext></cufon></span></button></li>
	              <li class="passRecover"><a href="<?php echo base_url();?>dangky"><span>Forgot your password?</span></a></li>
	            </ul>
	          </form>
	          <form class="arrow" action="<?php echo base_url()?>dangky" method="get" enctype="application/x-www-form-urlencoded"><button class="arrow fbSubmit" type="submit"><span><cufon class="cufon cufon-canvas" alt="Register" style="width: 55px; height: 10px;"><canvas width="62" height="12" style="width: 62px; height: 0px; top: -1px; left: -1px;"></canvas><cufontext>Register</cufontext></cufon></span></button></form>
	        </div>
	        <div id="arrow"></div>
	      </div>
	<?php }else{ ?>
      <div id="status1">
		<div class="logged_in">
			<h5>
				<a class="profile nick status0" href="#" target="profile" data-gtt="Player Profile" title="">
				<span>
					<cufon class="cufon cufon-canvas" alt="nguyennn" style="width: 74px; height: 12px;">
						<cufontext><?php echo $_SESSION['front_user_fullname'] ?></cufontext>
					</cufon>
				</span>
				</a>
			</h5>
			<ul>
				<li class="friendsOnline">
					<a href="#" data-gtt="0&nbsp;Friends online" style="background-position: -129px -24px;" title="">
						<span style="background:none;">0</span>
					</a>
				</li>
				<li class="mySkill7">
					<a href="#"><span>My Skill7</span></a>
				</li>
				<li class="logout">
					<form method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url()?>dangky/logOut">
						<button class="fbSubmit" id="logout" type="submit">
							<span>
								<cufon class="cufon cufon-canvas" alt="Log " style="width: 30px; height: 12px;">
									
									<cufontext>Log </cufontext>
								</cufon>
								<cufon class="cufon cufon-canvas" alt="out" style="width: 26px; height: 12px;">
									
									<cufontext>out</cufontext>
								</cufon>
							</span>
						</button>
						<input name="logout" type="hidden" value="1">
					</form>
				</li>
			</ul>
			<dl class="status0">
				<dt><span class="funCurrencyContainer" style="color:#fff; display:block; background:none; padding-left:0"><span style="display:block">Fun money 10,00</span></span></dt>
				<dd><a href="#"><span>Become a money player</span></a></dd>
			</dl>
			<form class="arrow" action="/web/Shop/Deposit" method="post" enctype="application/x-www-form-urlencoded">
				<button class="arrow fbSubmit" type="submit">
					<span>
						<cufon class="cufon cufon-canvas" alt="Top " style="width: 25px; height: 10px;">
							
							<cufontext>Top </cufontext>
						</cufon>
						<cufon class="cufon cufon-canvas" alt="up " style="width: 18px; height: 10px;">
							
							<cufontext>up </cufontext>
						</cufon>
						<cufon class="cufon cufon-canvas" alt="account" style="width: 54px; height: 10px;">
						
							<cufontext>account</cufontext>
						</cufon>
					</span>
				</button>
			</form>
		</div>
        <div id="arrow"></div>
      </div>
      <?php } ?>
</div> -->