<?php 
session_start();

include 'navbar.php';
include 'db.php';


$get_user = $_SESSION['username'];



?>

<body style="background:#ededed">

<br>
<br>
<br>


<style type="text/css">
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
</style>
   

  <center>  

  	<br>
  	<h3>Feedback hub</h3>
<br>
<div class="container">
    <div class="col-sm-12 col-lg-6 col-md-8">
      <form method="post" action="feedback_user.php" enctype='multipart/form-data'>
      <div class="card" style="border:2px solid ;background: white;border: none;border-radius: 20px;">
    
    <br>
    <textarea   style="background: white;border: 1px solid deepskyblue;margin: 20px;border-radius: 5px;color: black;" name="text" placeholder="Say Something" required></textarea>

    <br>

    	<button type="submit" class="btn btn-primary " name="feedback_btn">Submit Feedback</button>

</div>
</form>
</div>



<br>
<br>


<br>
<br>
<center><h4>Recently Uploaded</h4></center>

<br>

 <?php


     

        $result = mysqli_query($connect, "SELECT * FROM feedback ORDER BY id DESC");
     
       while($row2 = mysqli_fetch_array($result)) {
        

        

      
      echo "      <br>";

 echo "
        <center>
            <div class='col-sm-12 col-lg-8'>  
                <div class='card' style='border-radius:10px'>
                <p style='text-align: left;margin:20px;color:deepskyblue;'>".$get_user."</p>
                    <h5 style='text-align: left;margin:20px;color:black;'>".$row2['feedback']."</h5>
                    <br>
                    <p style='color:gray;margin:20px;text-align:left;'>Uploaded on ".$row2['date']."</p>
                   
                    <br>
                </div>
            </div>
        </center>
        
";
   } 
    



echo "
        
  </div>
</center>


<br>
";
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


</body>

</html>