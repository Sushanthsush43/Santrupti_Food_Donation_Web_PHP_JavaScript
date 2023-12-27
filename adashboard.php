<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Santrupti - Admin Dashboard</title>
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
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="aboutadmin.html" class="nav-item nav-link">About</a>
 
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
                    <h1 class="display-3 text-white animated slideInDown">Admin Welcome <?php echo $_SESSION['ANAME'] ?> to Dashboard</h1>
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
			<li><a href="admin.html"><i class="fa fa-home"></i> Home </a></li> 
			<li class="active"> / Admin dashboard</li>
		</ol>
		
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
				<a href="adminviewdonors.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-users fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">View Donors</h5>
                        </div>
                    </div>
					</a>
                </div>
                
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
				<a href="viewfood.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-bread-slice fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Approve Food Request</h5>
                        </div>
                    </div>
					</a>
                </div>
				
				<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<a href="view_receivers.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-users fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">View Receivers</h5>
                        </div>
                    </div>
					</a>
                </div>
				
			
				
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
				<a href="viewfeedback.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-book-reader fa-3x text-primary mb-4"></i>
							
							
							
                            <h5 class="mb-3">Feedback</h5>
				
                        </div>
                    </div>
					</a>
                </div>
				
				
				
				       <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
				<a href="viewsubscribers.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-book-reader fa-3x text-primary mb-4"></i>
							
							
							
                            <h5 class="mb-3">View subscribers</h5>
				
                        </div>
                    </div>
					</a>
                </div>
				
				
				
				
				
				
				<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
				<a href="admin.html">
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
        


	<!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Users Say...!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nagaraj</h5>
                    <p>Social Servicer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Its really a good website which helped us lot to make social service and we can find many donors who are willing to help the needy one's.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Raghavendra</h5>
                    <p>Public figure</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I really loved this website which really impressed me with its interface and its features are really user friendly</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Spoorti</h5>
                    <p>Social Worker</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I'm very much happy with this website and its cause is very helpful to us.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Amruta</h5>
                    <p>Public</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Its really a great website where we can find many donors as well the receivers who are willing to help the needy people</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
	
	
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
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9480897774</p>
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
                            <img class="img-fluid bg-light p-1" src="img/b.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/img.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/a.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/e.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/c.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/d.jpg" alt="">
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
                        Designed By <a class="border-bottom" href="admin.html">Rachita & Team</a><br><br>
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