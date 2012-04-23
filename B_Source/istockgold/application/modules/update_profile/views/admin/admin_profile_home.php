                <div id="main">
        <script language="JavaScript" type="text/javascript">
            function check_pass(V1, V2) {

                p1 = document.getElementById(V1).value;
                p2 = document.getElementById(V2).value;
                if (p1 == "" || p1 != p2 || p1.length < 5) {
                    return false;
                } else {
                    document.getElementById(V1).style.backgroundColor = 'white';
                    document.getElementById(V2).style.backgroundColor = 'white';
                    return true;
                }
            }
            function reset_pass() {
                if (document.getElementById('password0').value == '*********') {
                    document.getElementById('password0').value = '';
                    document.getElementById('password1').value = '';
                }
            }

            function isValidEmail(email) {

                at = email.indexOf("@");
                dot = email.indexOf(".", at);
                comma = email.indexOf(",");
                sp = email.indexOf(" ");
                dot2 = email.lastIndexOf(".") + 1;
                len = email.length;

                return ((at > 0) && (dot > (at + 1)) &&
          (comma == -1) && (sp == -1) &&
          (len - dot2 >= 2) &&
          (len - dot2 /*< last part of email */ <= 3));
            }
            function DEColor_All() {
                for (var i = 0; i < document.signup.elements.length; i++) {
                    var e = document.signup.elements[i];
                    if (e.type == 'text') {
                        document.signup.elements[i].style.backgroundColor = 'white';

                    }
                }
            }

            function CheckForm() {
                DEColor_All();
                setLabelText("lbl_error", " ");
                if (document.signup.fullname.value == "" || document.signup.fullname.value.length < 6) {
                    mark_fileds("fullname", "Check your full-name.");
                    return false;
                }
                if (document.signup.suser.value == "" || document.signup.suser.value.length < 5) {
                    mark_fileds("suser", "Check your user name (minimum 5 character).");
                    return false;
                }
                if (!check_pass("password0", "password1")) {
                    mark_fileds("password1"); mark_fileds("password0", "Password doesn't matched or too short (minimum 5 character).");
                    return false;
                }
                if (!isValidEmail(document.signup.mail.value)) {
                    mark_fileds("mail", "Incorrect e-mail address!");
                    return false;
                }

                if (!document.signup.agree.checked) {
                    document.signup.agree.style.backgroundColor = $Color_error;
                    document.signup.agree.focus();
                    setLabelText("lbl_error", "You must agree ours Terms and Conditions, if you want to be <b>Auto-Exchanger Demo</b> members.");
                    return false;
                } else {
                    document.signup.agree.style.backgroundColor = '#EFEFEF';
                }

                if (document.signup.turning.value == "" || document.signup.turning.value.length < 5) {
                    mark_fileds("turning", "Invalid turning number");
                    return false;
                }

                return true;
            }

</script>


               
  
<div id="page_title"><h1>Update Profile</h1></div> 
<div id="status_box"> 
<form name="signup" id="signup" action="./Auto-Exchanger Demo   Automatic currency exchange software - Auto-Exchanger demo  _files/Auto-Exchanger Demo   Automatic currency exchange software - Auto-Exchanger demo  .htm" method="post" onsubmit="return CheckForm();">
  	<fieldset> 
        <center>
				
			 
				Update your contact information by filling out the form below.
			                    
			
                          
			<br><label id="lbl_error" name="lbl_error" class="ErrorMessage"></label><br>
			
			                      <input type="hidden" name="suser" value="admin1">
					  <input type="hidden" name="section" value="do_update">
			                      
					  <label id="n_password0"><span>Password<i> (required)</i>:</span>
					  <input type="password" maxlength="20" size="30" name="password0" id="password0" value="*********" onclick="reset_pass();">
					  <input type="hidden" name="rid" value="">
					  
						
						
					  <label id="n_password"><span>Retype Password<i> (required)</i>:</span>
					  <input type="password" maxlength="20" size="30" name="password1" id="password1" value="*********" onclick="reset_pass();">
						  
					  <label id="n_mail"><span>E-mail<i> (required)</i>:</span>
					  <input maxlength="60" size="30" name="mail" id="mail" value="martin@martin.com" type="text">
					  </label>
						 
				                       <label id="n_Street_Address"><span>Street Address <i> (required)</i>:</span>
                       <input name="Street_Address" id="Street_Address" size="30" maxlength="255" value="" type="text">
						</label>
					
                       <label id="n_City"><span>City <i> (required)</i>:</span>
                       <input name="City" id="City" value="" size="30" maxlength="40" type="text">
						</label>
						
						
						<label id="n_State"><span>State/Province  <i> (required)</i>:</span>
                        <input name="State" id="State" value="" size="30" maxlength="40" type="text">
						</label>
						
						<label id="n_Zip_Code"><span>Zip/Postal Code <i> (required)</i>:</span>
                        <input name="Zip_Code" id="Zip_Code" value="" size="30" maxlength="14" type="text">
						</label>
						
						<label id="n_Phone_Number"><span>Phone  <i> (required)</i>:</span>
                         <input name="Phone_Number" id="Phone_Number" value="" size="30" maxlength="40">
                        </label>
				 						
                        <label id="n_country"><span>Country <i> (required)</i>:</span>
						<select name="country" id="country" style="width:196;">
						 		<option value="">Choose your country ...</option>
								<option value="AF" selected="">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic of)</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic Republic</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City State</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZR">Zaire</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                         </select>
						 </label>
						 
						 <label id="cid"><span>E-currency Type</span>
			 			 								E-gold <input type="hidden" name="cid" value="1">
								 						</label>		
						

						
						<label id="n_curreny_account"><span>Primary E-currency Account ID :</span>
                        <input maxlength="60" size="30" name="curreny_account" id="curreny_account" value="" type="text"><br>
						</label>		
		
								
				
				                        
						
						
						
						<center>
						
				                        
										Enter numbers that you see :<br>
                		<img src="images/turning.php" style="border: 1px solid #999999; width:80px; height:20px;"><br>
                        <input type="text" size="11" name="turning" id="turning" autocomplete="off"><br>
								
                        <input type="submit" class="btn" name="Submit" value="Edit"></center>
					
             </label></label></center>
	</fieldset>			
</form>

</div>		  
			  
			  

			  
			  
                
                
                
                
                </div>
