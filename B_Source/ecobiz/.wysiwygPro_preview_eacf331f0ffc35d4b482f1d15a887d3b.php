<?php
if ($_GET['randomId'] != "7wIN6plTIWLSu0oIAihBwTebpUDkFlUpkYe4YEaFBxVhTL9vzoWG_c6GFWwTAwQC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
