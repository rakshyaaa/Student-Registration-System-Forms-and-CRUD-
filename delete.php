<?php
require('connection.php');


$id=$_GET['id'];


$sql = "DELETE FROM student WHERE register_id=$id"; 
if (mysqli_query($conn, $sql)) {
    header("Location: display.php");     
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 
  }

  mysqli_close($conn);  
 
?>