<?php 
session_start();

include_once 'db.php';
$sql = "DELETE FROM user WHERE username='" . $_SESSION["username"] . "'";
if (mysqli_query($connect, $sql)) {
   header("location:after_remove.php");
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);



session_destroy();



?>