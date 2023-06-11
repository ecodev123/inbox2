<?php 


include 'navbar.php';
include 'db.php';
include 'profile.php';

$get_user = $_SESSION['username'];

sleep(2);

       if ($get_user == '') {
         header("location:index.php?you_have_been_signed_out");
       }


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>


<style type="text/css">


  h4 {
    color: black;
  }
  .container {
  padding: 2rem 0rem;

}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
.modal-header .close {
  margin-top: -1.5rem;
}

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}

label  {
   cursor: pointer;
}

hr {
  color: black;
  border: 10px solid #bdbdbd;
}

h5 {
  color:white;
  text-align: left;
  margin-left: 20px;
}

p {
  color:white;
  text-align: left;
  margin-left: 20px;
}

.card {
   border-radius: 0px;
}

.nav {
  background-color: white;
  position:fixed;
  margin-left: 250px;
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


video {
   border:1px solid deepskyblue;
   border-radius: 10px;
   color: deepskyblue;
}

video::-webkit-media-controls-timeline {
  background-color: darkcyan;
  padding-bottom: 0;
  margin-bottom: 15px;
  margin-top: 10px;
}

video::-webkit-media-controls-play-button {
  color: deepskyblue;
  margin-bottom:5px;
  margin-right: 5px;
  width: 20px;
  border-radius: 50px;
}

video::-webkit-media-controls-volume-slider {
  background-color: deepskyblue;

  padding-top: 0;
  margin-top: 20px;
  padding-bottom: 0;
}

video::-webkit-media-controls-mute-button {
  background-color: deepskyblue;
  border-radius: 50px;
  margin-left:2px;


}

video::-webkit-media-controls-fullscreen-button {
  background-color: deepskyblue;
  border-radius: 50px;
   margin-left:2px;


}

video::-webkit-media-controls-play-button {
  background-color: deepskyblue;
  border-radius: 50px;
   margin-left:2px;
   margin-bottom: 0px;


}

video::-webkit-media-controls-current-time {
  background-color: darkcyan;
  padding-bottom: 0;
  margin-bottom: 15px;
  margin-top: 10px;
}



 @media all and (max-width: 1200px) {
  .nav {
    display: none;
  }
 }



</style>


<body style="background:#ededed;">



 

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





<br>
<br>
<center><h4>Recently Uploaded</h4></center>

<br>






    <?php
$select = mysqli_query($connect, "SELECT * FROM post ORDER BY id DESC");

while ($row = mysqli_fetch_array($select)) {
    echo "
        <center>
            <div class='col-sm-12 col-lg-6 col-md-8'>  
                <div class='card' style='border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;'>
                    <h5 style='text-align: left;margin:20px;color:#0070BB;'>".$row['username']."</h5>
                    <br>
                    <p style='color:gray'>Uploaded on ".$row['date']."</p>
                    <p style='color: black ; font-size: 20px;font-weight: 500;'>".$row['text']."</p>

                    <img id='myImg' src='images/".$row['img']."' onerror=\"this.style.display = 'none'\" class='col-sm-12' style='height:300px;;border-radius:10px;width:100%'/>
                    <br>";

                    ?>

  <?php 


          if (!empty($row['videos'])) {
            echo "<video  id='myVid' controls muted loop onerror='error()'  height='300px' style = 'margin:20px'>
              <source  src='videos/".$row['videos']."' width='700px' />
            </video>";

          }else {
            echo "

  <script>

function error(){
    var vid1 = document.getElementById('myVid');
    vid1.onerror = function() {
        vid1.style.display = 'none';
    };
}

  </script>

          


     ";


 }


      ?>

      <?php 


      echo "

                </div>
            </div>
        </center>
        <br>
";
}
?>

            
 <div class="nav" >
 

<br>
<br>


<?php


  echo "

    

       ";





?>

 
    
  






  </div>

<br>
<br>


    

<script type="text/javascript">
  $("#myImg").error(function () { 
    $(this).hide(); 
});


function error(){
    var vid1 = document.getElementById("myVid");
    vid1.onerror = function() {
        vid1.style.display = "none";
    };
}


$('video').each(function(){
    if ($(this).is(":in-viewport")) {
        $(this)[0].play();
    } else {
        $(this)[0].pause();
    }
})

</script>





</body>
</html>        