<?php
session_start();
if(!isset($_SESSION['DEMAIL']))
{
	header("location: dlogin.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Santrupti - Donor Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img style= "width:20%;height:20% me-3"  src="img/icon.png" alt="">Sαɳƚɾυρƚι</h2></div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="dlogin.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
				
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Donate Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Welcome :<?php echo $_SESSION['DNAME'] ?> to Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
		
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="dlogin.html"><i class="fa fa-home"></i> Home </a></li> 
			<li class="active"> / Donor dashboard</li>
		</ol>
	
            <div class="row g-4">
			
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
				<a href="food.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-pizza-slice fa-3x text-primary mb-4"></i>
							
                            <h5 class="mb-3">Add Food</h5>
					
                        </div>
                    </div>
				</a>
                </div>
				
				
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<a href="viewfooddonor.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-users fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">View Food</h5>
                        </div>
                    </div>
					</a>
                </div>
				
				
				
				  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<a href="viewclaimedfoodByDonor.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-users fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Claimed Food</h5>
                        </div>
                    </div>
					</a>
                </div>
				
				
				  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<a href="viewunclaimedfoodByDonor.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-users fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Unclaimed Food</h5>
                        </div>
                    </div>
					</a>
                </div>
				

				
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
				<a href="viewfeedbackdonor.php">
                   <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-pen-square fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Feedback</h5>	
                        </div>
                    </div>
					</a>
                </div>
				
				<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
				<a href="logout.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-sign-out-alt fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Logout</h5>
                        </div>
                    </div>
					</a>
                </div>
				
				
				
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    
    <!-- About End -->


    <!-- Team Start -->
    
    <!-- Team End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
               <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="aboutadmin.html">About Admin</a>
                    <a class="btn btn-link" href="feedbacks.html">Contact Us</a>
                    <a class="btn btn-link" href="terms.html">Privacy Policy</a>
                    <a class="btn btn-link" href="terms.html">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hot & Spicy, Udupi, India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9008569042</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>santrupti0709@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/AshwiniGaonkr?t=YtgbWOicYx36jxCL73lhOQ&s=08"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/gajanan.naik.524"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://youtube.com/channel/UCQpEaSgpWsj2iMHViJWrWBw"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/aishwarya-naik-949465231"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/e.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/d.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/a.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/img.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/b.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/c.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Write your Email Here</p><form name="subscribers" method="post" action="addsubscribers.php">
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" name="semail" placeholder="Your email">
                        <button type="submit" name="btnsave" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Santrupti</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="admin.html">Rachitha & Team<br>
					
                        Distributed By <a class="border-bottom" href="https://umbvafood.com/">UMBVA</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>