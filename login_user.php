<?php
session_start();

include 'db.php';



   if (isset($_POST['btn'])) {

	$username = $_POST['username'];
	
	$password= $_POST['password'];

   $_SESSION['username'] = $username;
   $_SESSION['password'] = $password;

   $get_email = $_SESSION['email'];




   $select = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $sql = mysqli_query($connect,$select);

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $count = mysqli_num_rows($sql);


    if ($count == 1) {
      header("Location:home.php");   


    }else { 
      
        
      header("Location:index.php?");


    }

     



    






    


}










?>