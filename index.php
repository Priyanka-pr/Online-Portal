<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .navbar{
    display: flex;
    position: fixed;
    z-index: 12;
    width: 100%;
  }
  .navbar-brand img{
    border: 0px solid white;
    border-radius: 14px;
    height: 56px;
  }
</style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About us</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link disabled" href="contactForm.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/oriflame1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/oriflame2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/oriflame3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>
 <!-- About us -->
 <section id="about">
            <div class="container-fluid">
            <h3 class="text-center text-capitalize pt-3">About US</h3>  
            <hr class="w-25 mx-auto">
            <div class="row d mb-5">
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="img/logo2.jpg" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                 <!-- <h1>WHo I Am</h1> -->
                 <p>All publishers need to own their audience. But 
                   how do you 
                   build one in the first place? Where
                  do you find them? What can you offer in exchange
                  for
                their emails, and how do you target them 
               even if you can't get those?</head></br>
               All publishers need to own their audience. But 
               how do you 
               build one in the first place? Where
              do you find them? What can you offer in exchange
              for
            their emails, and how do you target them 
           even if you can't get those?
          </br>
          All publishers need to own their audience. But 
          how do you 
          build one in the first place? Where
         do you find them? What can you offer in exchange
         for
       their emails, and how do you target them 
      even if you can't get those?</p>
      <button class="btn btn-primary">our about us</button>
                  </div>
              </div>
            </div>
        </section>
        <section>
            <div class="container">
            <h3 class="text-center text-capitalize pt-3">Service</h3>  
            <hr class="w-25 mx-auto">
            <div class="row text-center mb-4">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                  <img class="card-img-top" src="img/wellness.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Wellness</h4>
                    <p class="card-text">For best results use for 3 months at least</p>
                    <a href="#" class="btn btn-primary">See Products</a>
                  </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                  <div class="card">
                    <img class="card-img-top" src="img/novage.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">NovAge</h4>
                      <p class="card-text">Skin Care Range (use daily)</p>
                      <a href="#" class="btn btn-primary">See Products</a>
                    </div>
                  </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                      <img class="card-img-top" src="img/giordanigold.jpg" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title">Giordani Gold</h4>
                        <p class="card-text">Best ever Color-Cosmetics</p>
                        <a href="#" class="btn btn-primary">See Products</a>
                      </div>
                    </div>
                    </div>
            </div>
         
            </div>
        </section>
        <!-- article -->
        <sction>
            <article class="bg-primary text-center text-white py-5">
              <div>
                <!-- <h3 class="display-4">+91 1025874954</h3>
                <p>If you want call this Same number</p>
                <button class="btn btn-warning">Contact us</button> -->
              </div>
            </article>

           </sction>

           <!-- gallery -->
           <section>
            <div class="container">
              <h3 class="text-center text-capitalize pt-3">Gallery</h3>  
              <hr class="w-25 mx-auto">
              <div class="row">
                <div class="col-lg-4 col-md-2 col-12 mb-4">
                  <img src="img/product1.jpg" class="img-fluid">
                  </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product2.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-2 col-12 mb-4">
                      <img src="img/product3.jpg" class="img-fluid">
                      </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product4.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product5.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product6.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product7.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="img/product8.jpg" class="img-fluid">
                    </div>
                <div class="col-lg-4 col-md-2 col-12 mb-4">
                  <img src="img/product9.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
           </section>
           <!-- end gallery -->
           <!-- <sction>
            <article class="bg-primary  py-5">
              <div class="text-white text-center">
                <h3 class="display-4">Want to Join</h3>
                <p>Be a part of bootstrap family</p>
                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Join Now</button>
              </div>
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    Modal Header
                    <div class="modal-header">
                      <h4 class="modal-title">Sign Up</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>-->
                    
                     <!-- Modal body  -->
                    <!-- <div class="modal-body">
                      <form action="/action_page.php">
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div> -->
                    
                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </article>
            </sction> -->
           <!-- <section>
            <div class="container mb-5">
              <h3 class="text-center text-capitalize pt-3">Contact Us</h3>  
              <hr class="w-25 mx-auto">
              <div class="w-50 mx-auto">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" class="form-control" placeholder="Enter yourname" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="number">Number:</label>
                    <input type="number" class="form-control" placeholder="Enter number" id="number">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                   <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
              </div>
              </div>
           </section> -->
           <!-- end contact us -->

           <footer class="mt-3">
             <p class="text-center bg-dark text-white">
               2021 @ Design by a Priyanka
             </p>
           </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>