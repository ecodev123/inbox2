<?php 


error_reporting(0);
trigger_error("user warning!", E_USER_WARNING);

session_start();
include "db.php";

$get_user = $_SESSION['username'];

       if ($get_user == '') {
         header("location:index.php?you_have_been_signed_out");
       }



?>


 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		inbox | enjoy uploading posts
	</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background:#ededed;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: white;
  border-right: 1px solid #ededed;
  position: fixed;
  top: 0;
  height: 100%;
  overflow: auto;
  margin-right: 30px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.sidebar a {
  display: block;
  color: black;
  padding: 15px;
  font-family: 'Roboto' sans-serif;
  text-decoration: none;
  font-size: 17px;
  margin-left: 10px;
  margin-top: 15px;
}
 
.sidebar a.active {
  background-color:white;
  color: black;
}

.sidebar a:hover {
 
  text-decoration: none;
  color:#00CCFF;
}

#logout {
    color: red;
}

.hide-header {
  display: none;
}

.nav {
  background-color: white;
  position:fixed;
  margin-left: 250px;
  height: 70px;
  width: 1100px;
  border-left: white;
  right: 0;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
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
  width: 450px;
  height: 40px;
  background-color:white;
  border-radius: 20px;
  margin-right: 10px;
  top: 20px;
  position: relative;
  border:1px solid deepskyblue;
  margin-left: 100px;
 }

#offcanvas {
  display: none;
}


@media screen and (max-width: 1200px) {
  .sidebar {
    display: none;
  }

  #offcanvas {
    display: block;
  }

  .hide-header  {
    display: block;
    position: relative;
    
  }
  
}

@media screen and (max-width: 400px) {
 
}
</style>
</head>
<body>





<div class="sidebar">

    <img src="images/logo.png" onclick="location.href='home.php'" style="width:150px;margin:20px;margin-top: 20px;cursor: pointer;">

<br>
<br>
<nav>
  
  <a class="active"  href="home.php" title="Inbox.com"><i class='fa fa-home' style="color:#0a2351;"></i>  Home</a>



 
     <a class="active"  href="upload_ex.php" title="upload here"> <i class='fa fa-upload' style="color:#0a2351;"></i>  Upload</a>


     <a class="active"  href="feedback.php" title="Feedback hub"><i class='fa fa-comment' style="color:#0a2351;"></i> Feedback Hub</a>
         <a class="active" style="color:deepskyblue;user-select: none;" title="hello <?php echo $get_user ?>"><i class='fa fa-user' style="color:#0a2351;"></i><span style='color:'> </span>  <?php echo $get_user ?></a>
 
  <a class="active" id="logout"  href="logout.php" title="logout"><i class='fa fa-trash' style="color:#0a2351;"></i>  Logout</a>
</nav>
</div>
</div>




<center>
    <img src="images/logo2.png" onclick="location.href='home.php'" style="width:200px;margin:20px;top: 80px;position: relative;" class="hide-header">
</center>

<button class="btn btn-primary" type="button" id="offcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="margin: 20px;margin-top: 10px;">
  <i class="fa fa-bars"></i>
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <img src="images/logo.png" onclick="location.href='home.php'" style="width:150px;margin:10px;margin-top: 20px;">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" >
    <div style="text-decoration: none;">
       <a class="active"  href="#news"><i class='fa fa-home' style="color:black;text-decoration: none;"></i>  Home</a>


<hr>
     <a class="active"  href="#news"><i class='fa fa-upload' style="color:black;text-decoration: none;"></i>  Upload</a>

<hr>

     <a class="active"  href="feedback.php"><i class='fa fa-user' style="color:black;"></i> Feedback Hub</a>
     <br>
  <a class="active"  href="#news"><i class='fa fa-trash' style="color:black;text-decoration: none;"></i>  Logout</a>
    </div>

  </div>
</div>


<script>
  $("#myImg").error(function () { 
    $(this).hide(); 
});

</script>



</body>
</html>