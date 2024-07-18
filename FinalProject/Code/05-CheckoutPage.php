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
        <li class="navbarTab"><a class="navbarFont" style="color:#dee2e2" href="04-ProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li class="navbarTab"><a class="navbarFont prevent-select" style="color:#dee2e2"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div>
    <h1 class="center" style="font-size: 4em;">CART</h1>
</div><br>

    <div class="container">
    
      <?php
          // database connection code
      $con = mysqli_connect('localhost', 'root', '','cackle');

      $user_id = $_SESSION["user"];

      $welcome = "SELECT * FROM `profile` WHERE `user_id` = '$user_id'";

      $result = $con->query($welcome);

      while($row = $result->fetch_assoc()) {
      echo '<div>';
        echo '<h1 class="center" style="font-size: 2em;">'. $row["username"] .'\'s cart</h1>';
      echo '</div><br>';
      }

      $total = 0;

      // database insert SQL code FOR BG
      $sql = "SELECT * FROM `cart` WHERE `user_id` = '$user_id'";
      
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($rowCart = $result->fetch_assoc()) {
          
          $item_id = $rowCart["item_id"];

          $item = "SELECT * FROM `products` WHERE `item_id` = '$item_id'";
      
          $resultItem = $con->query($item);

          while($rowProduct = $resultItem->fetch_assoc()) {        
            echo '<div class="container" style="background-color: #20272f; border-radius: 1em; ">';
              echo '<div class="card mb-4">';
                echo '<div class="card-body p-4">';

                  echo '<div class="row align-items-center">';
                    
                    echo '<div class="col-md-2">';
                      echo '<img height = "100%" width = "100%" src="'. $rowProduct["img"] .'" style="object-position: 100% 20%; object-fit:cover; overflow:hidden; max-height: 3em; border-radius: .5em;" alt="Generic placeholder image">';
                    echo '</div>';

                    echo '<div class="col-md-2 d-flex justify-content-center">';
                      echo '<div>';
                        echo '<p class="small text-muted mb-4 pb-2">Product Name</p>';
                        echo '<p class="lead fw-normal mb-0">'. $rowProduct["itemname"] .'</p>';
                      echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-2 d-flex justify-content-center">';
                      echo '<div>';
                        echo '<p class="small text-muted mb-4 pb-2">Quantity</p>';
                        echo '<p class="lead fw-normal mb-0">'. $rowCart["quantity"] .'</p>';
                      echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-2 d-flex justify-content-center">';
                      echo '<div>';
                        echo '<p class="small text-muted mb-4 pb-2">Price</p>';
                        echo '<p class="lead fw-normal mb-0">PHP '. $rowProduct["price"] .'</p>';
                      echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-2 d-flex justify-content-center">';
                      echo '<div>';
                        echo '<p class="small text-muted mb-4 pb-2">Total</p>';
                        echo '<p class="lead fw-normal mb-0">PHP '. $rowProduct["price"] * $rowCart["quantity"] .'</p>';
                      echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-1 d-flex justify-content-center">';
                    echo '<div>';
                      echo '<form method="post" action="removeFromCart.php">  <input type="hidden" id="orderId" name="orderId" value="'.$rowCart["order_id"].'">';
                      echo '<input type="submit" name="delete" class="removeButton" style="height: 2em; width: 4em; margin: .75em 0 0 0;" value="Remove"/> </form>';
                    echo '</div>';
                  echo '</div>';

                  echo '</div>';

                echo '</div>';
              echo '</div>';
            echo '</div><br>';

          $total += $rowProduct["price"] * $rowCart["quantity"];
          }
        }
        echo '<div class="container">';
          echo '<div class="card mb-4">';
            echo '<div class="card-body p-4">';

              echo '<div class="row align-items-center">';


                echo '<div class="col-md-12 center">';
                    echo '<span class="small text-muted me-2" style="font-size:1.5em;">Order total: </span> ';
                    echo '<span class="lead fw-normal" style="font-size:1.5em;">PHP '. $total .'</span>';
                  echo '</p>';
                echo '</div>';

              echo '</div>';

            echo '</div>';
          echo '</div>';
                echo '<form class="center" method="post" action="placeOrder.php"> <input type="hidden" id="userId" name="userId" value="'. $user_id .'">';
                echo '<input type="submit" name="add" class="orderButton" style="height: 2em; width: 10em; margin: .5em 0;" value="Place Order"/> </form>';
        echo '</div>';
      } 
      else {
        echo '<div class="center" style="background-color: #20272f; height: 20em; width: 30em; border-radius: .5em;"> <h1 class="center" style="font-size:3em;"><br>Nothing Here! <br>Browse the Catalogue to order items!</h1></div>';
      }
      $con->close();
      ?>   
    </div>
<br>
<div class="col-sm-12" style="background-color: #20272f;">
    <footer style="width: 100%;">
      <div class="container center">
      <ul class="navFoot">
              <li><a href="index.php">Home</a></li>|
              <li><a href="02-CataloguePage.php">Catalogue</a></li>|
              <li><a href="03-AboutUsPage.php">About</a></li>|
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
