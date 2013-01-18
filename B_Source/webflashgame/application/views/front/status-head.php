<div id="status">
	<!--<script type="text/javascript">
                window.addEvent('domready', function () {
                    $('status').getElements('input[type="text"][title], input[type="password"][title]').each(function (item) {
                        if (item.value == '') {
                            new OverText(item);
                        }
                    });
                });
            </script>-->
			<form method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url()?>dangky/checkAccount">
				<table class="formTable">
					<tr class="nick">
						<td><label for="nick"></label></td>
						<td><input name="nick" id="lNick" autocomplete="off" title="" type="text">
							<label for="lNick" style="line-height: normal; position: absolute; cursor: text; display: block; left: 254px; top: 2px;" class="overTxtLabel">Nickname</label></td>
					</tr>
					<tr class="pass">
						<td><label for="pass"></label></td>
						<td><input name="pass" id="lPass" title="" type="password"><label for="lPass" style="line-height: normal; position: absolute; cursor: text; display: block; left: 379px; top: 2px;" class="overTxtLabel">Password</label></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" class="login">Log In</button></td>
					</tr>
				</table>
				<div id="autoLoginContainer" class="contBox">
					<div class="container">
						<input name="autologin" id="autologin" value="1" type="checkbox">
						<label for="autologin">Stay logged in</label>
					</div>
				</div>
			</form>
			<ul>
				<li class="register"><a href="<?php echo base_url();?>dangky">Register</a></li>
				<li class="passRecover"><a title="" href="#" data-gtt="Click here to receive a new password by e-mail">Password?</a></li>
			</ul>
			<ul style="left: 863px; width: 102px; display: block; height:20px;" id="languages">
				<li class="active"><a href="#"><span style="display: block;" class="lang_name">English (US)</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name" style="display: block;">Čeština</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">Dansk</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">Deutsch</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">English (UK)</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">Español (ES)</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">Español (LatAm)</span></a></li>
				<li  class="active1"><a href="#"><span class="lang_name">Eλληνικά</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Français</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Hrvatski</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Italiano</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Magyar</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Nederlands</span></a></li>
				<li class="active1"><a href="#"><span class="lang_name">Norsk</span></a></li><li>
			</ul>
			<script type="text/javascript" src="js/GT.js"></script>
			<style>
				.heightlanguages{ height:339px !important}
			</style>
			<script type="text/javascript">
			$(document).ready(function(){		
			
				$('#languages').mouseenter(function(){
					$('#languages').addClass('heightlanguages');
				});
				$('#languages').mouseleave(function(){
					$('#languages').removeClass('heightlanguages');
				});
			})
		</script>
	<div id="walkthroughLink">
		<a href="javascript:;"><span>Take the GameTwist Tour »</span></a>
	</div>
</div>
</div>