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
                if (!check_pass("password0", "password1")) {
                    mark_fileds("password1"); mark_fileds("password0", "Password doesn't matched or too short (minimum 5 character).");
                    return false;
                }
                if (!isValidEmail(document.signup.mail.value)) {
                    mark_fileds("mail", "Incorrect e-mail address!");
                    return false;
                }
                return true;
            }
</script>
  
<div id="page_title"><h1>Update Profile</h1></div> 
<div id="status_box"> 
<form name="signup" id="signup" action="<?php echo base_url()?>index.php/is_update_profile/admin/edit" method="post" onsubmit="return CheckForm();">
  	<fieldset>
			Update your contact information by filling out the form below.
			<br><label id="lbl_error" class="ErrorMessage"></label><br>
			<label id="n_password0"><span>Password<i> (required)</i>:</span>
			<input type="password" maxlength="20" size="50" name="password0" id="password0" value="*********" onclick="reset_pass();"/>
			</label>
			<label id="n_password"><span>Retype Password<i> (required)</i>:</span>
   		    <input type="password" maxlength="20" size="50" name="password1" id="password1" value="*********" onclick="reset_pass();" />
			</label>
			<label id="n_mail"><span>E-mail<i> (required)</i>:</span>
            <input maxlength="60" size="50" name="mail" id="mail" value=<?php echo $profiles['email']?> type="text">
 			</label>
 			<center>
 				<input type="submit" class="btn" name="Submit" value="Update">
 			</center>
	</fieldset>			
</form>
</div>		  
</div>
