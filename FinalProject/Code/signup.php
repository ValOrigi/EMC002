<?php
    session_start ();
    
      $con = mysqli_connect('localhost', 'root', '','cackle');

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {           
        // get the post records
        $username = $_POST['userSignUp'];
        $email = $_POST['emailSignUp'];
        $password = $_POST['passSignUp'];      

        $hash = password_hash($password, PASSWORD_DEFAULT); 

        $sql = "SELECT * FROM `profile` WHERE `email` = '$email'"; 
        $resultEmail = $con->query($sql); 
        $sql = "SELECT * FROM `profile` WHERE `username` = '$username'"; 
        $resultUser = $con->query($sql); 
        
        if ($resultEmail->num_rows > 0) 
        { 
            echo '<script>alert("Email already exists in the database."); window.location.replace("index.php");</script>'; 
        }  
        
        else if ($resultUser->num_rows > 0) 
        { 
            echo '<script>alert("Username already exists in the database."); window.location.replace("index.php");</script>'; 
        } 
                    
        else 
        { 
            // database insert SQL code
            $sql = "INSERT INTO `profile` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hash')";
            
            // insert in database 
            $rs = mysqli_query($con, $sql);
            echo '<script>window.location.replace("index.php");</script>';
        }        
       }
      $con->close();
    ?>    