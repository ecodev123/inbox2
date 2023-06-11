<?php 



session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:after_remove.php?You_Have_Successfully_logged_out");






?>