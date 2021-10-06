
<?php



require 'connection.php';


$username =$_POST['username'];
$password =$_POST['password'];

$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "select *from login where username = '$username' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
          
if($count == 1){ 
     header("Location: display.php");
    exit;
}  
        
else{         
  function_alert();
  echo file_get_contents('admin.html');  
}     

function function_alert(){
    echo "<script>alert('Login failed.')</script>";
}

?>

