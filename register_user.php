<?php
session_start();

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


   if (isset($_POST['register_btn'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password= $_POST['password'];

   $_SESSION['username'] = $user;

   $_SESSION['email'] = $email;





     




    $insert  = "INSERT INTO user(name, username, email, password) VALUES('$name','$username','$email','$password');";

    $sql2 = mysqli_query($connect,$insert);
      header("Location:index.php?Welcome");








      


  






}






}




?>