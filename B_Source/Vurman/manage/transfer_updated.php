<?php
include('../config.php');
include('../functions.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');


  include("$templates/menu.php");

  include("$templates/transfer_updated.php");

  include("$templates/footer.php");
?>
