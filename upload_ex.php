<?php 

include 'navbar.php';
sleep(2);

$get_user = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="background:#ededed;">

<style type="text/css">
	
.nav {
  background-color: white;
  position:fixed;
  margin-left: 240px;
  height: 70px;
  width: 1100px;
  border-left: white;
  right: 0;
  top: 0;
}

.nav nav {
  position: relative;
  top: 25px;
  margin-left: 350px;

}
 .nav nav a {
  text-decoration: none;
  color: black;

 }

 .search {
  width: 300px;
  height: 40px;
  background-color:#dbdbdb;
  border-radius: 10px;
  margin-right: 150px;
  top: 20px;
  position: relative;
  border:none;
  margin-left: 100px;
 }


 @media all and (max-width: 1200px) {
  .nav {
    display: none;
  }
 }

</style>



<br>
<br>
<br>
<br>
<br>
<br>
   

  <center>  

<div class="container" >
    <div class="col-sm-12 col-lg-6 col-md-8">
      <form method="post" action="upload.php" enctype='multipart/form-data'>
      <div class="card" style="border:2px solid ;background: white;border: none;border-radius: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
    
    <br>
    <textarea   style="background: white;border: 1px solid deepskyblue;margin: 20px;border-radius: 5px;color: black;" name="text" placeholder="Say Something"></textarea>
<nav> 
    <label style="margin-right: 20px;align-items: left;"><i class="fa fa-image" style="color:#0a2351;;" title="images"></i>
    <center><input type="file" style="display: none;margin-right: 20px;" accept="image/*" name="image">
    </center>
    </label>
        <label style="margin-right: 20px;align-items: left;"><i class="fa fa-video" style="color:#0a2351;;" title="videos"></i>
    <center><input type="file" style="display: none;margin-right: 20px;" accept="video/*" name="video">
    </center>
    </label>
    <br>
 
  


</nav>    


    <button class="btn btn-primary" type="submit" style="margin: 20px;background: #0066ff;" name="upload">Upload</button>
    <br>

</form>
  </div>
    </div>
    </div>

    
  </center>





 <div class="nav">
 
 <input type="text" name="" class="search" placeholder="search your friends">


    <nav>

<i class='fa fa-upload' onclick="location.href='upload_ex.php'" style="color:black;text-decoration: none;cursor: pointer;" title="Upload">
  

</i>      
    </nav>
  


<?php

$select_img = mysqli_query($connect,"SELECT * FROM post  ");

if ($row = mysqli_fetch_array($select_img)) {
  echo "

    <img title='".$row['username']."' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdagfNlkCXKS54rDkgY6CjGNtPECsI_SZlKQ&usqp=CAU'  style='width:40px;height: 40px;border-radius: 50%;;position: absolute;top: 17px;right: 80px;'>

       ";
}


?>



  </div>

<br>
<br>

 <div class="nav" >
 
 <input type="text" name="" class="search" placeholder="search your friends" style="color:black;">
<br>
<br>


<?php


  echo "

    <p style='position: relative;top: 25px;right:0px;color:deeppink'><span style='color:black'>Hello . </span> ".$get_user."</p>

       ";

       if (empty($get_user)) {
         header("location:index.php");
       }



?>

 
    
  






  </div>

<br>
<br>


    


</body>
</html>