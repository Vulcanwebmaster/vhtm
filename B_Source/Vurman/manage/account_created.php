<?php
include('../config.php');
include('../functions.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');


  include("$templates/menu.php");

  include("$templates/account_created.php");

  include("$templates/footer.php");
?>