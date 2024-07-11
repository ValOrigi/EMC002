<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cackle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/website.css">
  <link rel="icon" type="image/x-icon" href="../Images/Icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color: #0f151a; ">
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
          <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="04-ProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
          <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="05-CheckoutPage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>

    <div class="col-sm-8 text-left"> 
      <h1 class="center">CART</h1>
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">TEMP TEXT</p><br>
      <div class="panel-body center" style="width: 75%;background-color: #cdcdc2; border-radius: 15px;"><img src="../Images/1.png" class="img-responsive" style="width:100%; border-radius: 15px;" alt="Image"></div><br>
      <p class="center" style="letter-spacing: 2px; line-height: 150%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
    
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <footer style="width: 100%;">
    <div class="container center">
        <ul class="navFoot">
            <li><a href="01-HomePage.html">Home</a></li>|
            <li><a href="04-ProfilePage.html">Profile</a></li>|
            <li><a href="02-CataloguePage.html">Catalogue</a></li>|
            <li><a href="03-AboutUsPage.html">About</a></li>|
            <li><a href="#my-modal" data-toggle="modal">Contact Us</a></li>
        </ul>
    </div>
      <p class="copy"> Copyright 2024 </p>
  </footer>
</div>

<div id="my-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color: #0f151a; padding: 1em;">
      <h1 class="center">Send us a report!</h1><br>
      <form>
        <div class="form-group">
          <p class="labelReport">Email Address</p>
          <input type="email" class="form-control" style="color: #0f151a;" id="emailRepor" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <p class="labelReport">Report Subject</p>
          <textarea class="form-control" style="color: #0f151a; padding: auto;" id="subj" rows="1"></textarea>
        </div>
        <div class="form-group">
          <p class="labelReport">Report Description</p>
          <textarea class="form-control" style="color: #0f151a;" id="reportDesc" rows="10"></textarea>
        </div>
        <div class="center">
          <button class="homeButton" onclick="submitReport()">Submit Report</button>
        </div>

      </form>
    </div>
  </div>
</div>

</body>
</html>
