<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cackle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../Images/Icon.png">
  <link rel="stylesheet" href="../css/website.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/about.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<?php
  session_start ();
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
          <li class="navbarTab"><a class="navbarFont prevent-select" style="color:#dee2e2">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php 
              if(!isset($_SESSION["login"]))
              {
                echo '<li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="01-LoginScreen.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
              }
              else
              {
                echo '<li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="04-ProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';
                echo '<li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="05-CheckoutPage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>';
              }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  
  <div>
    <h1 class="center" style="font-size: 4em;">ABOUT US</h1>
</div><br>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="background-color: transparent;"></div>

    <div class="col-sm-8 text-left" style="padding: 0 1em 2em 1em;"> 
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">Cackle is a Philippines-based merchandise company that focuses on distributing fandom related merch that may come from video games, music, animation, series, and much more! We aim to open the opportunities for Filipino artists to express their creativity and share it to people with similar interests!</p>
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">Currently, Cackle is calling for artists, creators, and small independent groups to form partnerships with in order to create a profile in the industry and to further proliferate the company's plans to support creatives.</p><br>
      <div class="panel-body center" style="width: 75%;background-color: #cdcdc2; border-radius: 15px;">
        <img src="../Images/Cackle Front Page.png" class="img-responsive" style="width:100%; border-radius: 15px;" alt="Image">
        <p class="center" style="letter-spacing: 2px; line-height: 150%; -webkit-text-stroke-width: .075em; -webkit-text-stroke-color: #0f151a80;">Cackle Homescreen made by Joshua Reyna</p>
      </div><br>
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">Starting from the artists that made the assets in this website, they are made by yours truly. At present, the current catalogue of the company is made up of art sourced from personal relations and public personal works. </p>
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">As the company grows it's community and as more distributions are made, proceeds of the profits made through the artistic works will directly be used to pay their rightful creators as well as to build upon the company itself.</p>
      
      <hr class="solid">
      <h3 class="center">Follow Us On</h3>
      <p class="center">
        <a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.youtube.com" class="fa fa-youtube" target="_blank"></a>
        <a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a>
        <a href="https://www.tumblr.com" class="fa fa-tumblr" target="_blank"></a>
      </p>
    </div>

    <div class="col-sm-2 sidenav" style="background-color: transparent;"></div>
</div>

<div class="col-sm-12" style="background-color: #20272f;">
  <footer style="width: 100%;">
    <div class="container center">
      <ul class="navFoot">
                <li><a href="index.php">Home</a></li>|
                <li><a href="02-CataloguePage.php">Catalogue</a></li>|
                <li><a class="prevent-select">About</a></li>|
                <li><a href="04-ProfilePage.php">Profile</a></li>|
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
