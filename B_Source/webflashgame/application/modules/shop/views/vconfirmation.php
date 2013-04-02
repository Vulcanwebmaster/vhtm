<div id="main">
	<div id="additionalContentTop">
		<div class="contBox" id="shopSteps">
			<h3><span>You're just 3 steps away from completing your purchase</span></h3>
			<div class="container">
				<ul>
					<li ><span>Item selection</span></li>
					<li ><span>Payment method</span></li>
					<li ><span>Payment</span></li>
					<li class="active"><span>Confirmation</span></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="container">
		<div id="tipHolder"></div>
		<div class="contBox" id="optDataDescription">
			<h3><span>Security question</span></h3>
			<div class="container">
				<p>Please choose a security question. You will need to answer this question when making changes to or requesting information about your account by e-mail or telephone. All personal information will be treated as strictly confidential.</p>
			</div>
		</div>
		<div class="contBox regContainer" id="settingsPersonal">
			<h3><span>Please choose a security question</span></h3>
			<form method="post" enctype="" class="container" id="fnSettingsPersonal" action="">
				<ol>
					<li class="last">
						<ol>
							<li>
								<label for="securityQuestionTag">Security question</label>
								<select name="securityQuestionTag" id="securityQuestionTag" class="formField ffSelect">
									<option value="squestion_name_of_first_pet">What was your first pet's name?</option>
									<option value="squestion_mothers_maiden_name">What is your mother's maiden name?</option>
									<option value="squestion_make_of_first_car">What brand was your first car?</option>
									<option value="squestion_make_of_first_motorbike">What is the make of your first motorbike?</option>
									<option value="squestion_name_of_first_boyfriend_girlfriend">What was your first boyfriend's/girlfriend's name?</option>
									<option value="squestion_favourite_food_as_child">What was your favorite food as a child?</option>
									<option value="squestion_favourite_sporting_team">What is the name of your favorite sports team?</option>
									<option value="squestion_name_of_road_you_grew_up">What is the name of the street you grew up on?</option>
									<option value="squestion_favourite_actor">Who is your favorite actor?</option>
									<option value="squestion_nickname_of_your_oldest_child">What is your oldest child's nickname?</option>
									<option value="squestion_nickname_of_your_youngest_child">What is your youngest child's nickname?</option>
									<option value="squestion_name_of_hospital_your_were_born">What was the name of the hospital you were born in?</option>											
								</select>
							</li>
							<li>
								<label for="securityAnswer">Answer</label>
								<input name="securityAnswer" id="securityAnswer" value="" maxlength="50" size="50" class="formField ffInput" type="text">
							</li>
						</ol>
						<input name="cmd" type="hidden" id="cmd" value="secquest">
						<input type="hidden" value="1" name="newsletter" id="newsletter">
						<input type="hidden" name="return2" value="/web/OptionalData-Save">
						<input name="save" type="hidden" id="save" value="1">
						<input type="hidden" name="nextpage" value="/web/OptionalData-Save">
						<input type="hidden" name="mode" id="mode" value="personal">								
						<input type="hidden" name="securityQuestion" id="securityQuestion" value="What was your first pet's name?">
						<button name="submit" type="submit" class="formButton fbSubmit"><span>Save</span></button>
					</li>
				</ol>
			</form>
		</div>
	</div>
	<div id="sideNav"></div>
	<div id="sideBar">
		<div class="featureBox  type_default" id="featureBox_">
		</div>
	</div>
	<br clear="both" />
</div>