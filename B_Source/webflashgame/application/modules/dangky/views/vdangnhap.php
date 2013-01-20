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
		#container{
			float: left;
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
				<div id="tipHolder"></div>
				<div id="heading">
					<h3><span>Login</span></h3>
				</div>
				<div class="left">
					<div id="login" class="contBox">
						<form method="post" enctype="application/x-www-form-urlencoded" name="fnLogin" class="container" id="fnLogin" action="/web/Login">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td class="first"></td><td class="last"></td></tr></thead>
								<tfoot><tr><td class="first"></td><td class="last"></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="nick">Nickname</label></td>
										<td class="inputElements"><input name="nick" type="text" class="formField ffInput" id="nick" value=""></td>
									</tr>
									<tr>
										<td class="inputNames"><label for="pass">Password</label></td>
										<td class="inputElements"><input name="pass" type="password" class="formField ffInput" id="pass" value=""></td>
									</tr>
									<tr class="formTips" title="Stay logged in :: Remember log-in details">
										<td id="fnLoginCheckbox" class="checkBoxTableCell inputElements">
											<input name="autologin" type="checkbox" id="autologin" value="1" class="ffCheckbox">
										</td>
										<td class="autologinDesc inputDescription"><label for="autologin">Stay logged in</label></td>
									</tr>
									<tr>
										<td><input name="nextpage" type="hidden" id="nextpage" value="/web/OptionalData-Save"></td>
										<td class="inputElements"><button name="submit" type="submit" class="formButton fbSubmit"><span>Log In</span></button></td>
									</tr>
								</tbody>
							</table>
							<ul class="signonHelpers">
								<li class="formTips"><a class="opener close" href="#"><span>I forgot my password!</span></a></li>
								<li><a class="opener close" href="#"><span>New here? Register now!</span></a></li>
							</ul>
						</form>
					</div>
				</div>
			<div class="right"></div>
		</div>
		<div id="sideNav"></div>
		<div id="sideBar"></div>
	</div>