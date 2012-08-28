<?php
//connect
include('../config.php');
include('../functions.php');
//check, if client is already logged in.
loginAdmin();
if(!loggedAdmin())
  {
  include('login_header.php');
  }
else
  {
  include($templates.'menu.php');  
  include($templates.'welcome.php');  
  include($templates.'footer.php');
  }
?>