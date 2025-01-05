<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ElectricityBill</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin Login</a>
      </li>
      </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
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
      <img src="images/peakpx.jpg" alt="light1" width="1500" height="700">
      <div class="carousel-caption">
        <h3>POWER</h3>
        <p>A spark of inspiration can lead to great things.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/uwp2152168.jpeg" alt="llight2" width="1500" height="700">
      <div class="carousel-caption">
      <h3></h3>
        <p></p>
    </div>
    <!--<div class="carousel-item">
      <img src="images/wallpaperflare.com_wallpaper.jpg" alt="light3" width="1500" height="700">
      <div class="carousel-caption">
        <h3>Electricity</h3>
        <p>The invention of electricity revolutionized the way we live, work, and communicate, transforming the world in countless ways.</p>
      </div>   
    </div>-->
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5" >
    <h2 class="text-center">About</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src = "images/kar.jpeg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Karnataka Power Transmission Corporation Limited (KPTCL)</h2>
      <p class="py-5">"Sole electricity transmission and distribution company in state of Karnataka. Origin was in Karnataka Electricity Board"</p>
      <a href="about.php" class="btn btn-success">check More</a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5" >
   <a href="login.php" class="btn btn-primary btn-lg btn-block">LOGIN</a> 
  </div>
  <div class="py-5" >
   <a href="register.php" class="btn btn-primary btn-lg btn-block">REGISTER</a> 
  </div>
</section>
<section class="my-5">
  <div class="py-5" >
    <h2 class="text-center">SERVICES</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bescom.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/mescom.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/hescom.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/gescom.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cesc.jpeg" class="img-fluid pb-3">
      </div>
    </div>
  </div>
</section>

<section class="light-section" id="contact">
  <div class="container-fluid">

            <h1>📞Contact Us</h1>
        <div id="service">
            <div class="box">
                 
                <!-- Email -->
                <img src="images/gmail.png" alt= "gmailimage">
                <br>
                 
                    <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Use this Email to send us about the problem faced
                </p>
                <p>kptcladmin@gmail.com</p>
 
            </div>
            <div class="box">
                <img src="images/phone.png" alt= "phone image">
                <br>
                 
                <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Toll Free Number
                </p>
                <p>+1800 200 300 400</p>
 
            </div>
        </div>
    </section>
</div>
</section>
<footer class="background dark-section">
        <p class="text-footer">
        Created by <b>Varshitha S</b> & <b>Suneetha S L</b> 
            Copyright@ All rights are reserved
        </p>
 
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>