<?php 
  //connect to a database
  $conn = mysqli_connect('localhost','darkwolf','','radforums');
  if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
  }
?>
