<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php

session_destroy();
Redirect_to("index");


?>