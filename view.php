<?php

require('connection.php');
$id=$_GET['id'];

$sql = "SELECT * FROm student where register_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
            
?>

<html>
    <head>
        <title>SRS</title>
        <link rel="stylesheet" href = "public/css/style.css" type="text/css" >
        <link rel= "stylesheet" href="public/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body >
        <div class = "main">
            <div class="head">            
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class = "head_h1">View Info</h> 
                    </div>
                    
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="display.php">Back</a> 
                    </div>
                </div> 
                <hr>             
            </div>
            
            <div class = "formSection">
            <form id = "srmForm" name= "srmForm" action = "update.php" method = "POST" >
                <div class = "form-row">
                    <label for = "register_id">Registration Number</label>
                    <input type="text" class="form-control" value = "<?php echo $row['register_id'];?>" id = "register_id" name = "register_id" readonly>
                </div> 
                <div class="form-row">
                    <div class="col-sm-4">
                        <label class = "lab" for="fname">First Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['first_name'];?>" id="fname" name="fname" readonly>
                    </div>
                    
                    <div class="col-sm-4">
                        <label for="mname">Middle Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['middle_name'];?>" id="mname" name="mname" readonly>
                    </div> 

                    <div class="col-sm-4">
                        <label for="fname">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['last_name'];?>" id="lname" name="lname" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label> Gender </label>
                    <br>
                    <input type="radio" id="male" name="gender"  <?php if($row['gender'] == "Male") { echo "checked"; }?> value="Male" disabled>
                    <label class = "check" for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" <?php if($row['gender'] == "Female") { echo "checked"; }?>  value="Female" disabled>
                    <label class= "check" for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" <?php if($row['gender'] == "Other") { echo "checked"; }?> value="Other" disabled>
                    <label class= "check" for="other">Others</label>
                    <p id = "genderError">Please select your Gender.</p>
                </div>

                <div class="form-row">
                    <div class="col">
                            <label for="contact">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name = "contact" value="<?php echo $row['contact'];?>" readonly> 
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name = "email" value="<?php echo $row['email'];?>" readonly>
                    </div>
                </div>  
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name= "address" value="<?php echo $row['address'];?>" readonly>
                </div>

                <div class= "form-group" id= "enrollment">
                    <label for="course">Enrolled In</label>
                        <div id="selectCourse">
                        <select id="course" name="course" class = "custom-select" form="srmForm">
                            <option value="">---</option>
                            <option value="BSc.CSIT" <?php if ($row['enroll']=="BSc.CSIT") echo "selected ='selected' "?> disabled>BSc.CSIT</option>
                            <option value="BIM" <?php if ($row['enroll']=="BIM") echo "selected ='selected' "?> disabled>BIM</option>
                            <option value="BCA" <?php if ($row['enroll']=="BCA") echo "selected ='selected' "?> disabled>BCA</option>
                            <option value="BIT" <?php if ($row['enroll']=="BIT") echo "selected ='selected' "?> disabled>BIT</option>
                        </select>
                        </div>
                </div>
                
            </form>
        </div>

    </div>      
    </body>
</html>