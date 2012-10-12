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
                <p class="menutitle">
                    FUND DATABASE</p>
                    <?php 
					if($_SESSION['usertype']=="admin")
					{
					?>
	                     <a class="menu" href="fund-manage.php" onfocus="blur()">MANAGEMENT</a>
                    	 <a class="menu" href="fund-db.php" onfocus="blur()">FUND DATABASE</a>
                     <?php 
					}
					else if($_SESSION['usertype']=="user")
					{
					?>
                    	 <a class="menu" href="fund-db.php" onfocus="blur()">FUND DATABASE</a>
                    <?php 
					}
					?>
            </div>
            <div class="menucontainer">
                <p class="menutitle">FUND PORTFOLIO</p>
                	<?php 
					if($_SESSION['usertype']=="admin")
					{
					?>
                  		<a class="menu" href="portfolio-admin.php" onfocus="blur()">MANAGEMENT</a>
                        <!--<a class="menu" href="portfolio-client.php" onfocus="blur()">FUND PORTFOLIO SEARCHING</a> -->
                    <?php 
					}
					else if($_SESSION['usertype']=="user")
					{
					?>
						<a class="menu" href="portfolio-client.php" onfocus="blur()">A/C RECONCILIATION</a>                         
                    <?php 
					}
					?>
            </div>
            <div class="menucontainer">
                <p class="menutitle">
                    ONLINE FORM(S)</p>   
                <a class="menu" href="stf.php" onfocus="blur()">STOCK TRANSFER FORM</a>                 
            </div>
            <?php 
			if($_SESSION['usertype']=="user")
			{
				?>
                <div class="menucontainer">
                <p class="menutitle">CALENDAR</p>
                <a class="menu" href="calendar.php" onfocus="blur()">WORK SCHEDULER</a>
                <a class="menu" href="calendar-list.php" onfocus="blur()">CONTRACTING WORK</a>
	            </div>
                <?php
			}
			else if($_SESSION['usertype']=="admin")
			{
				?>
                <div class="menucontainer">
                <p class="menutitle">CALENDAR</p>
                <a class="menu" href="calendar-admin.php" onfocus="blur()">WORK SCHEDULER</a>
                <a class="menu" href="calendar-list.php" onfocus="blur()">CONTRACTING WORK</a>
	            </div>
                <?php
			}
			?>