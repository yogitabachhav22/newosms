


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <title>OSMS</title>
</head>
<body>
    <!--Start Navigation -->
    <nav>
        <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- End Navigation -->

 
<!-- Start header Jumbotron -->

<header class="jumbotron back-image" style="background-image:url(images/banner1.jpeg);">
<div class="myclass mainHeading">
    <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
    <p class="font-italic">Customer's Happiness is our Aim</p>
    <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
    <a href="#Registration" class="btn btn-success mr-4">Sign Up</a>
</div>
</header>

<!-- End Header Jumbotron -->
<!-- Start Introduction Section-->
<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS Services</h3>
<p>OSMS is India's leading chain of multi-brand Electonics and Electical service workshop offering wide array of services.We focus on enhanceing your user experience by offering world classs 
Electonic Appliances maintainence services. Our sole mission is, "To provide Electonic Appliances care services to keep the devices fit and Healthy and customer Happy and smiling."With 
well equipped Electronic Appliances  service centers and fully trained mechanics , we provide quality services with excellent packages that are designed to offer you great savings. 
Our state-of-art workshops are conveniently located in many cities across the country.Now you can book your service online by doing registration.
</p>
</div>
</div><!-- End Introduction Section container -->

<!-- Service section starts-->
<div class="container text-center border-bottom" id="Services">

    <h2>Our Services</h2>
    <div class="row mt-4">
       <div class="col-sm-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
</div>

        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
</div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repairs</h4>
</div>
</div>
<div>
    <hr>
<!-- Service section ends-->

<!-- Start Registration Form -->
<?php include("UserRegistration.php")?>
<!-- Registration Form ends -->



<!-- Start Happy Costumer -->


<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6"> <!-- Start First Column -->
                <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                    <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                    <h4 class="card-title">Rahul Gupta</h4>
                    <p class="card-text">I am Happy with this customer services.They Provide service on time.Happy to visit this website.within less time i got my Laptop repaired with affordable price.</p>
                </div>
                </div>
                 </div><!-- End First column -->

                 

                 <div class="col-lg-3 col-sm-6"> <!-- Start second Column -->
                <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                    <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                    <h4 class="card-title">Vritika Pagare</h4>
                    <p class="card-text">I am Happy with this customer services.They Provide service on time.Happy to visit this website.within less time i got my Laptop repaired with affordable price.</p>
                </div>
                </div>
                 </div><!-- End second column -->

                 <div class="col-lg-3 col-sm-6"> <!-- Start third  Column -->
                <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                    <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                    <h4 class="card-title">Deepak Singh</h4>
                    <p class="card-text">I am Happy with this customer services.They Provide service on time.Happy to visit this website.within less time i got my Laptop repaired with affordable price.</p>
                </div>
                </div>
                 </div><!-- End third  column -->

                 <div class="col-lg-3 col-sm-6"> <!-- Start fourth  Column -->
                <div class="card shadow-lg mb-2">
                <div class="card-body text-center">
                    <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                    <h4 class="card-title">Sonam Rao</h4>
                    <p class="card-text">I am Happy with this customer services.They Provide service on time.Happy to visit this website.within less time i got my Laptop repaired with affordable price.</p>
                </div>
                </div>
                 </div><!-- End fourth  column -->
    </div>
</div>
</div><!-- End Happy customere-->

<!-- form section Start here -->
<?php include("contactform.php") ?>
 <!-- form section ends here -->

 <!-- Start Footer-->
 <footer class="container-fluid bg-dark text-white mt-5 width:100%;" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Yogita &copy; 2022
          </small>
          <small class="ml-2"><a href='admin/login.php'>Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->






<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>