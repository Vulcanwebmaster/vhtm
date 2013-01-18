<div id="container">
	<div id="tipHolder">
		
	</div>
	<div id="heading">
		<h3><span>Login</span></h3>
		</div><div class="left">
			<div id="login" class="contBox">
				<form method="post" enctype="application/x-www-form-urlencoded" name="fnLogin" class="container" id="fnLogin" action="<?php echo base_url()?>dangky/checkAccount">
					<table class="formTable">
						<colgroup>
						<col class="first">
						<col class="second">
						</colgroup><thead><tr>
							<td class="first"></td>
							<td class="last"></td></tr></thead><tfoot><tr>
								<td class="first"></td><td class="last"></td></tr></tfoot><tbody><tr>
									<td class="inputNames">
										<label for="nick">Nickname</label>
									</td><td class="inputElements">
										<input name="nick" type="text" class="formField ffInput" id="nick" value=""></td></tr><tr>
											<td class="inputNames">
												<label for="pass">Password</label></td>
											<td class="inputElements">
												<input name="pass" type="password" class="formField ffInput" id="pass" value="">
											</td></tr>
											<tr class="formTips" title="Stay logged in :: Remember log-in details">
												<td id="fnLoginCheckbox" class="checkBoxTableCell inputElements">
												<input name="autologin" type="checkbox" id="autologin" value="1" class="ffCheckbox"></td>
												<td class="autologinDesc inputDescription"><label for="autologin">Stay logged in</label></td></tr><tr><td>
												<input name="nextpage" type="hidden" id="nextpage" value="/web/Community"></td><td class="inputElements">
													<button name="submit" type="submit" class="formButton fbSubmit"><span>Log In</span></button></td></tr></tbody></table>
														<ul class="signonHelpers"><li class="formTips">
															<a class="opener close" href="<?php echo base_url()?>dangky/registAccount"><span>I have forgotten my password!</span></a></li><li>
																<a class="opener close" href="/web/Register?nextpage=
								%2Fweb%2FCommunity"><span>New here? Register now!</span></a></li></ul></form></div></div><div class="right"></div></div>