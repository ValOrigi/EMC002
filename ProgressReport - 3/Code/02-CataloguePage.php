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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #0f151a;">
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
        <li class=" navbarTab"><a class="navbarFont" style="color:#dee2e2" href="01-HomePage.html">Home</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="02-CataloguePage.html">Catalogue</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="03-AboutUsPage.html">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="04-ProfilePage.html"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div>
    <h1 class="center" style="font-size: 4em;">BROWSE THE SHOP</h1>
</div><br>

<div class="col">

</div>
    <div class="container">
    
      <?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');
      
      // database insert SQL code
      $sql = "SELECT * FROM products";
      
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<h5 class="card-title center" style="background-color: #658478; border-radius: 15px; font-size: 1em;">' . $row["itemname"] .'</h5>';
            echo '<img src="'.$row["img"]. '" class="card-img-top" style="width:100%; height:100%; border-radius: 15px; margin: 0.5em 0" alt="Art Piece" />';
              echo '<div class="card-body">';
                echo '<p class="card-text center" style="background-color: #20272f; border-radius: 15px; font-size: 1em;">'. $row["description"] .'</p>';
                echo '<p class="qty center" style="background-color: #20272f; border-radius: 15px; font-size: 1em;">'. $row["price"] .'</p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
      
        }
      } 
      else {
        echo "0 results";
      }
      $con->close();
      ?>    
    </div>
</div>
  
<div class="col-sm-2">

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
            Email Address
            <input type="email" class="form-control" id="emailRepor" placeholder="name@example.com">
          </div>
          <div class="form-group">
            Report Subject
            <textarea class="form-control" style="color: black; padding: auto;" id="subj" rows="1"></textarea>
          </div>
          <div class="form-group">
            Example Text Area
            <textarea class="form-control" style="color: black;" id="reportDesc" rows="5"></textarea>
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
