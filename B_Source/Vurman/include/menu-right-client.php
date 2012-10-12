		<?php 
			if($_SESSION['usertype']=="user")
			{
			?>
        	<div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="sub-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-client.php" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="switch-client.php" onfocus="blur()">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRADE(S)</p>                
                <a class="menu" href="sub-open-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-open-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    EXECUTED TRADE(S)</p>
                <a class="menu" href="sub-executed-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-executed-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    CANCELED TRADE(S)</p>
                <a class="menu" href="sub-cancelled-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-cancelled-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    HELP DESK / SUPPORT</p>
                <a class="menu" href="helpdesk.php" onfocus="blur()">HELP DESK</a>
                <a class="menu" href="chat.php" onfocus="blur()">LIVE SUPPORT</a>   
                <a class="menu" href="shoutbox.php" onfocus="blur()">ASK THE T.A.</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    LOGOUT</p>
                <a class="menu" href="logout.php" target="_top" onfocus="blur()">LOGOUT</a>
            </div>
            <?php 
			}
			else if($_SESSION['usertype']=="admin")
			{
			?>
			<div class="menucontainer">
                <p class="menutitle">
                    TRADING / EXECUTION</p>
                <a class="menu" href="sub.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red.php" onfocus="blur()">REDEMPTION ORDER</a>
                <a class="menu" href="switch.php" onfocus="blur()">SWITCH ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRADE(S)</p>                
                <a class="menu" href="sub-open-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-open-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    EXECUTED TRADE(S)</p>
                <a class="menu" href="sub-executed-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-executed-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    CANCELED TRADE(S)</p>
                <a class="menu" href="sub-cancelled-client.php" onfocus="blur()">SUBSCRIPTION ORDER</a>
                <a class="menu" href="red-cancelled-client.php" onfocus="blur()">REDEMPTION ORDER</a>                
            </div>
             <div class="menucontainer">
                <p class="menutitle">
                    MANAGEMENT</p>                    
                <a class="menu" href="user.php" onfocus="blur()">USER</a>    
                <a class="menu" href="counterparty.php" onfocus="blur()">COUNTERPARTY</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    HELP DESK / SUPPORT</p>
                <a class="menu" href="helpdesk.php" onfocus="blur()">HELP DESK</a>
                <a class="menu" href="chat.php" onfocus="blur()">LIVE SUPPORT</a>   
                <a class="menu" href="shoutbox.php" onfocus="blur()">ASK THE T.A.</a>
            </div>
            <!--<div class="menucontainer">
                <p class="menutitle">
                    USER MANAGEMENT</p>
                <a class="menu" href="" target="_top" onfocus="blur()">MANAGEMENT</a>
            </div>-->
            <div class="menucontainer">
                <p class="menutitle">
                    LOGOUT</p>
                <a class="menu" href="logout.php" target="_top" onfocus="blur()">LOGOUT</a>
            </div>
            <?php 
			}
			?>