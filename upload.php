<?php
session_start();
// Include the database connection file  

$get_user = $_SESSION['username'];




require_once 'db.php';

// Define an array to store error messages
$errors = [];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



  // Validate the text input
  $text = trim($_POST['text']);

  // Validate the link input



  // Validate the image input
  $img_name = $_FILES['image']['name'];
  if (empty($img_name)) {

  } else {
    $img_type = $_FILES['image']['type'];
    $img_size = $_FILES['image']['size'];
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $max_size = 10 * 1024 * 1024; // 10 MB

  }

  // Validate the video input
  $vid_name = $_FILES['video']['name'];
  if (!empty($vid_name)) {
    $vid_type = $_FILES['video']['type'];
    $vid_size = $_FILES['video']['size'];
    $allowed_types = ['video/mp4', 'video/quicktime'];
    $max_size = 100 * 1024 * 1024; // 100 MB


  }

  // If there are no errors, process the form data
  if (empty($errors)) {

    // Sanitize the inputs to prevent SQL injection attacks
    $text = mysqli_real_escape_string($connect, $text);
    $img_name = mysqli_real_escape_string($connect, $img_name);
    $vid_name = mysqli_real_escape_string($connect, $vid_name);




    // Insert the data into the posts table
    $sql = "INSERT INTO post (img, text,videos,username,name) VALUES ('$img_name', '$text', '$vid_name' ,'$get_user','$get_name')";
    mysqli_query($connect, $sql);



    // Upload the image file
    $img_folder = "images/" . basename($img_name);
    move_uploaded_file($_FILES['image']['tmp_name'],$img_folder);

    // Upload the video file (if provided)
    if (!empty($vid_name)) {
      $vid_folder = "videos/" . basename($vid_name);
      move_uploaded_file($_FILES['video']['tmp_name'],$vid_folder);
    }

    // Redirect to home page after successful submission
    header("Location:home.php?Uploaded_your_post_to_inbox...");
    sleep(3);    exit;
  }
}

// Output the error messages if any
if (!empty($errors)) {
  foreach ($errors as $error) {
    echo "<p>$error</p>";
  }
}
?>
