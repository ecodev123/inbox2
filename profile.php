<?php

include 'db.php';


$get_user = $_SESSION['username'];

sleep(1);

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>

</head>
<style type="text/css">
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap");

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {

    height: 100vh;
    

    font-family: Montserrat;
    color: black;
}

.card2 {
    padding: 15px;
    color: black;
    background:white;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.7);
    
    
}

.cover-photo {
    position: relative;
    background: url(https://c4.wallpaperflare.com/wallpaper/619/550/467/dark-blue-wallpaper-preview.jpg);
    background-size: cover;
    height: 180px;
    border-radius: 5px 5px 0 0;
}

.profile {
    position: absolute;
    width: 170px;
    bottom: -60px;
    left: 15px;
    border-radius: 50%;
    border: 2px solid #222;
    background: #222;
    padding: 5px;
}

.profile-name {
    font-size: 20px;
    margin: 25px 0 0 120px;
    color:black;
    font-weight: bold;
}

.about {
    margin-top: 30px;
    line-height: 1.6;
    color:#03101f;
    font-size: 20px;
    font-family: Montserrat;
    text-align: left;
    margin: 20px;
}

.btn {
    margin: 30px 15px;
    background: #7ce3ff;
    padding: 10px 25px;
    border-radius: 3px;
    border: 1px solid #7ce3ff;
    font-weight: bold;
    font-family: Montserrat;
    cursor: pointer;
    color: #222;
    transition: 0.2s;
}

.btn:last-of-type {
    background: transparent;
    border-color: red;
    color: red;
}

.btn:hover {
    background: red;
    color: #222;
}


</style>




<body>
<br>
<br>  
<br>
<br> 
  <center>

  <div class="col-lg-6">
<div class="card2">

        <div class="cover-photo">
            <img src="https://t3.ftcdn.net/jpg/00/64/67/52/360_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" class="profile">
        </div>
        <h3 class="profile-name"><?php echo $get_user ?></h3>


        <div class="icons">
    <button class="btn btn" onclick="location.href='logout.php'"> Logout</button>
        <button class="btn btn" onclick="location.href='remove.php'">Signout</button>
        </div>
        </div>
    </div>
  </div>
  </center>

</body>
</html>