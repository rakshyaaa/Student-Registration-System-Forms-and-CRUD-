
<?php

require 'connection.php';


$fname = $_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$enroll=$_POST['course'];



$sql = "INSERT INTO student (first_name,middle_name,last_name,gender,contact, email,address,enroll)
         VALUES ('$fname','$mname','$lname','$gender','$contact','$email','$address','$enroll')";

if (mysqli_query($conn, $sql)) {
  function_alert();
  echo file_get_contents('index.html');
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

function function_alert(){
    echo "<script>alert('Registered successfully.')</script>";
}

?>