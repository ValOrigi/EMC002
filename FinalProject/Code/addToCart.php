<?php
  session_start ();
    // database connection code
    $con = mysqli_connect('localhost', 'root', '','cackle');

    $user_id = $_SESSION["user"];
    
    $sql = "SELECT * FROM `profile` WHERE `user_id` = '$user_id'";

    $result = $con->query($sql);

    while($row = $result->fetch_assoc()) {
        $user_id = $row["user_id"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {     
        $item_id = $_REQUEST['itemId'];

        if(array_key_exists('add', $_POST)) { 
            // sql to delete a record
            $sql = "INSERT INTO cart (user_id, item_id, quantity) VALUES ($user_id, $item_id, '1')";

            if ($con->query($sql) === TRUE) {
                echo '<script>alert("Added to Cart!"); window.location.replace("02-CataloguePage.php");</script>'; 
            } 
        } 
    }
    $con->close();
?>