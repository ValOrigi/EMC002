<!DOCtype html>
    <head>
        <!-- important -->
        <title>Cackle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/website.css">
        <link rel="icon" type="image/x-icon" href="../Images/Icon.png">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <?php 
    session_start ();
    ?>

    <body>
        <div class="screen hideScroll">
            <div class="sidebar center">
                <a><img class="prevent-select"src="..\Images\Logo.png" width="100%" height="25%"></a>
                <p class="homeButton" ><a href="index.php" style="text-decoration:none; color: #dee2e2;">Home</a></p>
                <p class="homeButton"><a href="02-CataloguePage.php" style="text-decoration:none; color: #dee2e2;">Catalogue</a></p>
                <p class="homeButton"><a href="03-AboutUsPage.php" style="text-decoration:none; color: #dee2e2;">About Us</a></p>
                <p class="homeButton"><a href="04-ProfilePage.php" style="text-decoration:none; color: #dee2e2;">Profile</a></p>
                <hr class="solid">
                <?php if(!isset($_SESSION["login"]))
                    {
                        echo '<p class="homeButton"><a href="01-LoginScreen.php" style="text-decoration:none; color: #dee2e2;">Log In</a></p>';
                    }
                    else
                    {
                        echo '<p class="homeButton"><a href="logout.php" style="text-decoration:none; color: #dee2e2;">Log Out</a></p>';
                    }
                ?>
            </div> 
            
        <div id="homeDiv" class="screenDiv">
            <div class="homeDivs home">
            <div class="catalogueInteract center">
                        <p class="navHomeButton"><a href="02-CataloguePage.php" style="text-decoration:none; font-size: 2em; color:#dee2e2;">BROWSE NOW!</a></p>
                    </div>
            </div>

            <div id="catalogueDiv" class="screenDiv">
                <div id="browseDiv" class="screenDiv">
                    <div class="homeDivs browse">
                        <div class="browseInteract center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img 
                                            onclick="openModal();currentSlide(1)"
                                            class="d-block w-100" 
                                            src="../Images/Merchandise/Backgrounds/Beau Room.png" 
                                            style="width: 100%; height: 100%;" 
                                            alt="Beau's Room"
                                        />
                                     </div>
                                    <div class="carousel-item">
                                        <img 
                                            onclick="openModal();currentSlide(2)"
                                            class="d-block w-100" 
                                            src="../Images/Merchandise/Backgrounds/Harper Room.png" 
                                            style="width: 100%; height: 100%;" 
                                            alt="Harper's Room"
                                        />
                                    </div>
                                    <div class="carousel-item">
                                        <img 
                                            onclick="openModal();currentSlide(3)"
                                            class="d-block w-100" 
                                            src="../Images/Merchandise/Backgrounds/Jaiden Room.png" 
                                            style="width: 100%; height: 100%;" 
                                            alt="Jaiden's Room"
                                        />
                                    </div>
                                    <div class="carousel-item">
                                        <img 
                                            onclick="openModal();currentSlide(4)"
                                            class="d-block w-100" 
                                            src="../Images/Merchandise/Backgrounds/Kirby House Preview.png" 
                                            style="width: 100%; height: 100%;" 
                                            alt="Kirby House"
                                        />
                                    </div>
                                    <div class="carousel-item">
                                        <img 
                                            onclick="openModal();currentSlide(5)"
                                            class="d-block w-100" 
                                            src="../Images/Merchandise/Backgrounds/Lady Rainicorn House Preview.png" 
                                            style="width: 100%; height: 100%;" 
                                            alt="Lady Rainicorn House"
                                        />
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div id="profileDiv" class="screenDiv">
                        <div class="homeDivs profile">
                            <div class="profileInteract center">
                                <p class="navHomeButton" ><a href="04-ProfilePage.php" style="text-decoration:none; font-size: 2em; color:#dee2e2;">PROFILE</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </div>

        <!-- anchor links -->
        <div class="footer">
            <ul class="breadcrumb">
                <li><a href="#homeDiv">Home</a></li>
                <li><a href="#browseDiv">Browse</a></li>
                <li><a href="#profileDiv">Profile</a></li>
            </ul>
        </div>
    </body>
    
    <div id="myModal" class="modal prevent-select" style="z-index: +999;">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
      
          <div class="mySlides">
            <div class="numbertext">Beau's Room</div>
            <img id="pic" src="../Images/Merchandise/Backgrounds/Beau Room.png" style="width:100%" alt="Beau's Room">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">Harper's Room</div>
            <img src="../Images/Merchandise/Backgrounds/Harper Room.png" style="width:100%" alt="Harper's Room">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">Jaiden's Room</div>
            <img src="../Images/Merchandise/Backgrounds/Jaiden Room.png" style="width:100%" alt="Jaiden's Room">
          </div>

          <div class="mySlides">
            <div class="numbertext">Kirby's Room</div>
            <img src="../Images/Merchandise/Backgrounds/Kirby House Preview.png" style="width:100%" alt="Kirby's Room">
          </div>

          <div class="mySlides">
            <div class="numbertext">Lady Rainicorn's House</div>
            <img src="../Images/Merchandise/Backgrounds/Lady Rainicorn House Preview.png" style="width:100%" alt="Lady Rainicorn's House">
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
      

    <script>
        // scroll horizontally
        const target = document.querySelector('div')

        target.addEventListener('wheel', event => {
        const toLeft  = event.deltaY < 0 && target.scrollLeft > 0
        const toRight = event.deltaY > 0 && target.scrollLeft < target.scrollWidth - target.clientWidth

        if (toLeft || toRight) {
            event.preventDefault()
            target.scrollLeft += event.deltaY
        }
        })
        

        function logout(){
            window.location.replace("index.php");
        }


        function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("mySlides");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    </script>
</html>