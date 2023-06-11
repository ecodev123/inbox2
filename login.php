<?php


sleep(3);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		inbox | login
	</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<style type="text/css">
	form input {
		border: none;
	}


  * {
    color: black;
    background-color: white;
  }
</style>


<br>

<br>

<center>
<div class="container">
 <div class="row">



 	<div class="col-lg-6">
 		<br>
 		<br>
 		<br>
 		<h3 style="font-size:30px;font-weight: bold;"><span style="color: deepskyblue;">Lo</span>gin</h3>
 		<br>
 		<form method="post" action="login_user.php" enctype="mutipart/form-data">

 	     <div class="form-group">
           <label for="exampleInputEmail1">Username</label>
           <br>
           <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter Username" style="border: none;background: #f0f0f0;" name="username" required>
         </div>

         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
            <br>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border: none;background: #f0f0f0;border-radius: 30px#f0f0f0;" name="password" required>
         </div>
           <br>
           <button type="submit" name="btn" class="btn btn-primary col-sm-12 ">Login</button>
           <br>
           <p >Dont have an account <a class="link" style="cursor: pointer;">Signin</a></p>
        </form>
 	</div>

 	 	<div class="col-md-6 col-lg-6">
 		<img class="" src="https://media.istockphoto.com/id/1281150061/vector/register-account-submit-access-login-password-username-internet-online-website-concept.jpg?s=612x612&w=0&k=20&c=9HWSuA9IaU4o-CK6fALBS5eaO1ubnsM08EOYwgbwGBo=" style="width: 100%;">
 	</div>


 </div>
</div>
</center>



<script>

   $(document).ready(function () {
    $(".link").click(function click() {
      $("body").load("register.php");
    })
   })

</script>


</body>
</html>