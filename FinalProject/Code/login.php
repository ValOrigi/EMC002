<?php
  session_start ();
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {           
        // get the post records
        $username = $_REQUEST['userLogin'];
        $password = $_REQUEST['passLogin'];

        $user_id = mysqli_query($con, "SELECT `user_id` FROM `profile` WHERE `username` = '$username'");
        $hashcode = mysqli_query($con, "SELECT `password` FROM `profile` WHERE `username` = '$username'");

        while($row = $hashcode->fetch_assoc()) {
          $hash = $row["password"];
        }

        $sql = "SELECT * FROM `profile` WHERE `username` = '$username'";
//decrypt or get encrypt pass and compare//
        $result = mysqli_query($con,$sql);      
        $row = mysqli_num_rows($result);      
        $count = mysqli_num_rows($result);
              
        if($count && password_verify($password, $hash)) 
        {
            $row = mysqli_fetch_array($user_id);
            $_SESSION["user"]= $row['user_id'];
            $_SESSION["login"]="1";
            header("location:index.php");
        } 
        else 
        {
            echo '<script>alert("Incorrect Credentials"); window.location.replace("01-LoginScreen.php");</script>'; 
        }
       }
      $con->close();
    ?>    