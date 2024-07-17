<?php
  session_start ();
    // database connection code
    $con = mysqli_connect('localhost', 'root', '','cackle');

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {     
        $user_id = $_REQUEST['userId'];

        if(array_key_exists('add', $_POST)) { 
            // sql to delete a record
            $sql = "DELETE FROM cart WHERE `user_id` = '$user_id'";

            if ($con->query($sql) === TRUE) {
                header("location:05-CheckoutPage.php");
            } 
        } 
    }
    $con->close();
?>