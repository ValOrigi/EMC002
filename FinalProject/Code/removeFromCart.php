<?php
  session_start ();
    // database connection code
    $con = mysqli_connect('localhost', 'root', '','cackle');

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {     
        $order_id = $_REQUEST['orderId'];

        if(array_key_exists('delete', $_POST)) { 
            // sql to delete a record
            $sql = "DELETE FROM cart WHERE `order_id` = '$order_id'";

            if ($con->query($sql) === TRUE) {
                header("location:05-CheckoutPage.php");
            } 
        } 
    }
    $con->close();
?>