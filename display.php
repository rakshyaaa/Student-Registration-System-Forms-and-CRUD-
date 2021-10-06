<?php

require 'connection.php';
//include 'public/css/style.css';
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>


<html>
    <head>
        <title>SRM</title>
        <link rel="stylesheet" href = "public/css/style.css" type="text/css" >
        <link rel= "stylesheet" href="public/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class = "main">
            <div class="head">             
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class = "head_h1">Registration Info</h3> 
                    </div>
                    
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="index.html">LogOut</a> 
                    </div>
                </div>  
                <hr>
            </div>
    
            <?php
                if (mysqli_num_rows($result) > 0) {
            ?>
                        
            <div class="formsection">
                <table>
                    <tr>
                    <td>Registration Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>        
                    <td>Course</td>
                    <td> Actions </td>
                    </tr>
                            
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['register_id'];?></td>
                        <td><?php echo $row['first_name'];?></td>
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['enroll'];?></td>
                        <td>
                            <a class="btn btn-primary" href="view.php?id=<?php echo $row['register_id'];?>">View</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $row['register_id'];?>">Edit</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="delete.php?id=<?php echo $row['register_id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                        
                </table>
            </div>
            
            <?php
                }else{
                  echo "No results";
                }    
            
                mysqli_close($conn);
            ?>   
        </div>
    </body>
</html>