<?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {           
        // get the post records
        $username = $_POST['userLogin'];
        $password = $_POST['passLogin'];

        $sql = "SELECT * FROM `profile` WHERE `username` = '$username' and `password` = '$password'";

        $result = mysqli_query($con,$sql);      
        $row = mysqli_num_rows($result);      
        $count = mysqli_num_rows($result);
              
        if($count == 1) 
        {
            echo '<script>window.location.replace("01-HomePage.html");</script>';
        } 
        else 
        {
            echo '<script>alert("Incorrect Credentials"); window.location.replace("index.php");</script>'; 
        }
       }
      $con->close();
    ?>    