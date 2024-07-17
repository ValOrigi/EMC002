<?php
      $con = mysqli_connect('localhost', 'root', '','cackle');

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {           
        // get the post records
        $emailReport = $_POST['emailReport'];
        $reportSubj = $_POST['reportSubj'];
        $reportDesc = $_POST['reportDesc'];

        // database insert SQL code
        $sql = "INSERT INTO `report` (`emailReport`, `reportSubj`, `reportDesc`, `status`) VALUES ('$emailReport', '$reportSubj', '$reportDesc', 'UNRESOLVED')";
            
        // insert in database 
        $rs = mysqli_query($con, $sql);
        echo '<script>alert("Your report has been sent!")</script>';  
        echo '<script>window.location.replace("03-AboutUsPage.php");</script>';
       }
      $con->close();
    ?>    