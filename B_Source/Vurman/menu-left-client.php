			<?php 
			if($_SESSION['usertype']=="user")
			{
			?>
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLEMENT INSTRUCTION</p>                    
                <a class="menu" href="transfer-rec-client.php" onfocus="blur()">TO RECEIVE FUND</a>    
                <a class="menu" href="transfer-del-client.php" onfocus="blur()">TO DELIVER FUND</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRANSFER(S)</p>                 
                <a class="menu" href="transfer-rec-open-client.php" onfocus="blur()">FUND BEING RECEIVED</a>
                <a class="menu" href="transfer-del-open-client.php" onfocus="blur()">FUND BEING DELIVERED</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLED TRANSFER(S)</p>
                <a class="menu" href="transfer-rec-settled-client.php" onfocus="blur()">FUND RECEIVED</a>
                <a class="menu" href="transfer-del-settled-client.php" onfocus="blur()">FUND DELIVERED</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    CANCELED TRANSFER(S)</p>
                <a class="menu" href="transfer-rec-cancelled-client.php" onfocus="blur()">FUND BEING RECEIVED</a>
                <a class="menu" href="transfer-del-cancelled-client.php" onfocus="blur()">FUND BEING DELIVERED</a>
            </div>
            <?php 
			}
			else if($_SESSION['usertype']=="admin")
			{
			?>
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLEMENT INSTRUCTION</p>                    
                <a class="menu" href="transfer-rec-admin.php" onfocus="blur()">TO RECEIVE FUND</a>    
                <a class="menu" href="transfer-del-admin.php" onfocus="blur()">TO DELIVER FUND</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    OPEN TRANSFER(S)</p>                 
                <a class="menu" href="transfer-rec-open-admin.php" onfocus="blur()">FUND BEING RECEIVED</a>
                <a class="menu" href="transfer-del-open-admin.php" onfocus="blur()">FUND BEING DELIVERED</a>                
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    SETTLED TRANSFER(S)</p>
                <a class="menu" href="transfer-rec-settled-admin.php" onfocus="blur()">FUND RECEIVED</a>
                <a class="menu" href="transfer-del-settled-admin.php" onfocus="blur()">FUND DELIVERED</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    CANCELED TRANSFER(S)</p>
                <a class="menu" href="transfer-rec-cancelled-admin.php" onfocus="blur()">FUND BEING RECEIVED</a>
                <a class="menu" href="transfer-del-cancelled-admin.php" onfocus="blur()">FUND BEING DELIVERED</a>
            </div>
            <?php 
			}
			?>
             <div class="menucontainer">
                <p class="menutitle">APPOINTMENT</p>
                <a class="menu" href="appointment-calender.php" onfocus="blur()">APPOINTMENT CALENDAR</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND DATABASE</p>
                <a class="menu" href="fund-db-admin.php" onfocus="blur()">FUND DATABASE</a>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    FUND PORTFOLIO</p>
                <a class="menu" href="portfolio-admin.php" onfocus="blur()">FUND PORTFOLIO</a>                         
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    ONLINE FORM(S)</p>   
                <a class="menu" href="stf.php" onfocus="blur()">STOCK TRANSFER FORM</a>                 
            </div>