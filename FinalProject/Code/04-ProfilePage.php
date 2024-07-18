<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cackle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../Images/Icon.png">
  <link rel="stylesheet" href="../css/website.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/catalogue.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php
  session_start ();
  if(!isset($_SESSION["login"]))

	header("location:01-LoginScreen.php"); 
?>

<body class="mainBG">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="margin-top: 1em;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <a class="navbar-brand prevent-select"><img class="prevent-select" src="..\Images\Icon.png" width="50em" height="50em"></a>
      <ul class="nav navbar-nav">
        <li class=" navbarTab"><a class="navbarFont" style="color:#dee2e2" href="index.php">Home</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="02-CataloguePage.php">Catalogue</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="03-AboutUsPage.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbarTab"><a class="navbarFont prevent-select" style="color:#dee2e2"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="05-CheckoutPage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div>
      <h1 class="center" style="font-size: 4em;">PROFILE</h1>
  </div><br>

    <div class="container">
    
      <?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');
      
      $user_id = $_SESSION["user"];

      $sql = "SELECT * FROM `profile` WHERE `user_id` = '$user_id'";
      
      $result = $con->query($sql);

      while($row = $result->fetch_assoc()) {
      echo '<div>';
        echo '<h1 class="center" style="font-size: 2em;"> Welcome '. $row["username"] .'!';
      echo '</div>';
      
      echo '<div class="center">';
        echo '<div class="col-sm-1 center">';
        echo '</div>';

        echo '<div class="col-sm-4 center" style="width:40%; background-color: #20272f; border-radius: .5em;">';
          echo '<img src="../Images/Icon.png" class="card-img-top" style="background-color: #0f151a; width:65%; height:65%; border-radius: 1000px; margin: 0.5em 0" alt="Default Icon" />';
          echo '<p style="letter-spacing: 2px; line-height: 150%;">Username: '. $row["username"] .'</p>';
          echo '<p style="letter-spacing: 2px; line-height: 150%;">Email: '. $row["email"] .'</p>';
          echo '<button class="homeButton" style="width: 10em; margin:.5em 0;">Change Password</button>';
        echo '</div>';

        echo '<div class="col-sm-1 center">';
        echo '</div>';

        echo '<div class="col-sm-4 center" style="width: 40%; background-color: #20272f; border-radius: .5em; ">';
          echo '<p class="center" style="letter-spacing: 2px; line-height: 150%; font-size: 1.75em;">About You </p>';
          echo '<p style="center letter-spacing: 2px; line-height: 150%; margin-left:1em; width:10m;">'. $row["description"] .'</p>';
          echo '<button class="homeButton" style="width: 5em; margin:.5em 0;">Edit Bio</button>';
        echo '</div>';

        echo '<div class="col-sm-2 center">';
        echo '</div>';
      echo '</div>';
      }
      $con->close();
      ?>    
    </div>
</div>

<div class="col-sm-12" style="margin-top:2.5em; background-color: #20272f;">
    <footer style="width: 100%;">
      <div class="container center">
      <ul class="navFoot">
              <li><a href="index.php">Home</a></li>|
              <li><a href="02-CataloguePage.php">Catalogue</a></li>|
              <li><a href="03-AboutUsPage.php">About</a></li>|
              <li><a class="prevent-select">Profile</a></li>|
              <li><a href="#my-modal" data-toggle="modal">Contact Us</a></li>
          </ul>
      </div>
        <p class="copy"> Copyright 2024 </p>
    </footer>
  </div>
  
  <div id="my-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color: #0f151a; padding: 1em;">
        <h1 class="center">Send us a report!</h1>
        <form id="reportForm" method="post" action="report.php">
        <div class="form-group">
        <p class="center">Email Address</p>
          <input type="email" class="form-control" style="color: black; padding: auto;" id="emailReport" name="emailReport" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <p class="center">Report Subject</p>
          <textarea class="form-control" style="color: black; padding: auto;" id="reportSubj" name="reportSubj" rows="1" placeholder="ie. Lost Cart Item..."></textarea>
        </div>
        <div class="form-group">
        <p class="center">Report Description</p>
          <textarea class="form-control" style="color: black;" id="reportDesc" name="reportDesc" rows="5" placeholder="ie. I lost my item in my cart..."></textarea>
        </div>
        
      </form>
      <div class="center"><button class="homeButton" onclick="onClickReport()">Submit Report</button></div>
      </div>
    </div>
  </div>

</body>

<script>  
    function onClickReport() {
        var email = document.getElementById("emailReport").value;
        var subj = document.getElementById("reportSubj").value;
        var desc = document.getElementById("reportDesc").value;
        
        let output = "";

        if(email == '' || subj == '' || desc == '')
        {
            alert("Please fill in all the fields.");
        }
        else if(!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)))
        {
            alert("Input a valid email.");
        }
        else
        {
            document.getElementById("reportForm").submit();
        }
    }
</script>

</html>
