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
        <li class="navbarTab"><a class="navbarFont prevent-select" style="color:#dee2e2">Catalogue</a></li>
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="03-AboutUsPage.php">About Us</a></li>
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
    <h1 class="center" style="font-size: 4em;">BROWSE THE SHOP</h1>
</div><br>

<div>
  <input type="text" style="width:50%"  id="myFilter" class="form-control center" onkeyup="search()" placeholder="Search for a product name...">
</div><br>

<div>
    <h1 class="center" style="font-size: 2em;">BACKGROUND PRINTS</h1>
</div><br>
  <div id="myProducts">
    <div class="container" >
    
      <?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');
      
      // database insert SQL code FOR BG
      $sql = "SELECT * FROM `products` WHERE `type` = 'bg'";
      
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<h5 class="card-title center" style="background-color: #3d7241; border-radius: .5em; font-size: 1em; box-shadow: 0 -.15em 3px .05em rgb(15, 21, 26, 75%) inset;"> <strong>' . $row["itemname"] .'</strong></h5>';
            echo '<img src="'.$row["img"]. '" class="card-img-top" style="width:100%; height:100%; object-position: 100% 20%; object-fit:cover; max-height: 7em; border-radius: .5em; margin: 0.5em 0" alt="Art Piece" />';
              echo '<div class="card-body">';
                echo '<p class="card-text center" style="background-color: #20272f; height: 150px; border-top-right-radius: .5em; border-top-left-radius: .5em;">'. $row["description"] .'</p>';
                echo '<p class="qty center" style="background-color: #20272f; border-bottom-right-radius: .5em; border-bottom-left-radius: .5em; font-size: 1.25em;">PHP '. $row["price"] .'</p>';
                if(isset($_SESSION["login"]))
                    {
                      echo '<form class="center" method="post" action="addToCart.php">  <input type="hidden" id="itemId" name="itemId" value="'.$row["item_id"].'">';
                      echo '<input type="submit" name="add" class="orderButton" style="margin: .5em 0; height: 2em; width: 100%;" value="Add to Cart"/> </form>';
                    }
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
    </div><br>
  
  <div>
      <h1 class="center" style="font-size: 2em;">PORTRAIT PRINTS</h1>
  </div><br>

    <div class="container">
    
      <?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');
      
      // database insert SQL code FOR PORTRAITS
      $sql = "SELECT * FROM `products` WHERE `type` = 'portrait'";
      
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<h5 class="card-title center" style="background-color: #3d7241; border-radius: .5em; font-size: 1em; box-shadow: 0 -.15em 3px .05em rgb(15, 21, 26, 75%) inset;"> <strong>' . $row["itemname"] .'</strong></h5>';
            echo '<img src="'.$row["img"]. '" class="card-img-top" style="width:100%; height:100%; object-position: 100% 20%; object-fit:cover; max-height: 7em; border-radius: .5em; margin: 0.5em 0" alt="Art Piece" />';
              echo '<div class="card-body">';
                echo '<p class="card-text center" style="background-color: #20272f; height: 150px; border-top-right-radius: .5em; border-top-left-radius: .5em;">'. $row["description"] .'</p>';
                echo '<p class="qty center" style="background-color: #20272f; border-bottom-right-radius: .5em; border-bottom-left-radius: .5em; font-size: 1.25em;">PHP '. $row["price"] .'</p>';
                if(isset($_SESSION["login"]))
                    {
                      echo '<form class="center" method="post" action="addToCart.php">  <input type="hidden" id="itemId" name="itemId" value="'.$row["item_id"].'">';
                      echo '<input type="submit" name="add" class="orderButton" style="margin: .5em 0; height: 2em; width: 100%;" value="Add to Cart"/> </form>';
                    }
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
    </div><br>

  <div>
      <h1 class="center" style="font-size: 2em;">LANDSCAPE PRINT</h1>
  </div><br>

    <div class="container">
    
      <?php
      // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');
      
      // database insert SQL code FOR LANDSCAPES
      $sql = "SELECT * FROM `products` WHERE `type` = 'landscape'";
      
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<h5 class="card-title center" style="background-color: #3d7241; border-radius: .5em; font-size: 1em; box-shadow: 0 -.15em 3px .05em rgb(15, 21, 26, 75%) inset;"> <strong>' . $row["itemname"] .'</strong></h5>';
            echo '<img src="'.$row["img"]. '" class="card-img-top" style="width:100%; height:100%; object-position: 100% 20%; object-fit:cover; max-height: 7em; border-radius: .5em; margin: 0.5em 0" alt="Art Piece" />';
              echo '<div class="card-body">';
                echo '<p class="card-text center" style="background-color: #20272f; height: 150px; border-top-right-radius: .5em; border-top-left-radius: .5em;">'. $row["description"] .'</p>';
                echo '<p class="qty center" style="background-color: #20272f; border-bottom-right-radius: .5em; border-bottom-left-radius: .5em; font-size: 1.25em;">PHP '. $row["price"] .'</p>';
                    if(isset($_SESSION["login"]))
                    {
                      echo '<form class="center" method="post" action="addToCart.php">  <input type="hidden" id="itemId" name="itemId" value="'.$row["item_id"].'">';
                      echo '<input type="submit" name="add" class="orderButton" style="margin: .5em 0; height: 2em; width: 100%;" value="Add to Cart"/> </form>';
                    }
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
    </div>
  </div>
<div class="col-sm-12" style="background-color: #20272f;">
    <footer style="width: 100%;">
      <div class="container center">
          <ul class="navFoot">
              <li><a href="index.php">Home</a></li>|
              <li><a class="prevent-select">Catalogue</a></li>|
              <li><a href="03-AboutUsPage.php">About</a></li>|
              <li><a href="04-ProfilePage.php">Profile</a></li>|
              <li><a href="#my-modal" data-toggle="modal">Contact Us</a></li>
          </ul>
      </div>
        <p class="copy"> Copyright 2024 </p>
    </footer>
  </div>
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
function search() {
  var input, filter, cards, cardContainer, title, i;
  input = document.getElementById("myFilter");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById("myProducts");
  cards = cardContainer.getElementsByClassName("card");
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(".card-title");
    if (title.innerText.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}


document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };

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
