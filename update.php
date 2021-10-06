<?php
require 'connection.php';

$register_id = $_POST['register_id'];
$fname = $_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$enroll=$_POST['course'];

$sql = "UPDATE STUDENT SET first_name = '".$fname."', middle_name = '".$mname."', last_name = '".$lname."',
        gender = '".$gender."', contact = '".$contact."', email = '".$email."', address = '".$address."', enroll = '".$enroll."' WHERE register_id = '".$register_id."' ";

if (mysqli_query($conn, $sql)) {
    header("Location: display.php");
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);

?>