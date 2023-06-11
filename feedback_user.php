<?php 

include 'db.php';



if (isset($_POST['feedback_btn'])) {
	$feedback  = $_POST['text'];
	$insert = "INSERT INTO feedback (username,feedback) VALUES ('User','$feedback');";
	$sql = mysqli_query($connect,$insert);

	header("location:feedback.php?feedback_uploaded");
}


?>