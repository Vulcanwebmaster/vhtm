<div id="status1">
	<div class="login">
          <form method="post" enctype="application/x-www-form-urlencoded" action="/web/Login">
            <ul>
              <li class="nick"><input type="text" name="nick" id="lNick1" title="Nickname" value="Nickname" onblur="if(this.value=='') this.value='Nickname';" onfocus="if(this.value=='Nickname') this.value='';"></li>
              <li class="password"><input type="password" name="pass" id="lPass1" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"></li>
              <li class="login"><button type="submit" class="fbSubmit"><span><cufon class="cufon cufon-canvas" alt="Log" style="width: 27px; height: 12px;"><cufontext>Log In</cufontext></cufon></span></button></li>
              <li class="passRecover"><a href="/web/PassRecover"><span>Forgot your password?</span></a></li>
            </ul>
          </form>
          <form class="arrow" action="/web/Register" method="get" enctype="application/x-www-form-urlencoded"><button class="arrow fbSubmit" type="submit"><span><cufon class="cufon cufon-canvas" alt="Register" style="width: 55px; height: 10px;"><canvas width="62" height="12" style="width: 62px; height: 0px; top: -1px; left: -1px;"></canvas><cufontext>Register</cufontext></cufon></span></button></form>
        </div>
        <div id="arrow"></div>
      </div>

</div>