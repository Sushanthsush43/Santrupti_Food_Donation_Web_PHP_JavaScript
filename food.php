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
    <title>Santrupti - Add Food</title>
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
                <a href="ddashboard.php" class="nav-item nav-link active">Home</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Food Details</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
        <!-- registration Start -->
    <div class="container-xxl py-5">
        <div class="container">
		
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Food Available</h6>
                <h1 class="mb-5">Fill the food details</h1>
            </div>
          
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form name="food" action="foodstore.php" method="post" class="main_form" enctype="multipart/form-data">
					<ol class="breadcrumb w3l-crumbs">
			<li><a href="ddashboard.php"><i class="fa fa-home"></i> Donor dashboard </a></li> 
			<li class="active"> / Food details</li>
		</ol>
					
                        <div class="row g-3">
						
							 <div class="col-12">

								  <div class="form-floating">
                                    <input type="text" class="form-control" name="foodname" placeholder="Your food Name" style="width=device-width" required>
                                    <label for="rname">Enter Food Name</label>
                                </div>
                            </div>
							
						
						
						
                            <div class="col-12">

								  <div class="form-floating">
							<select name="title" id="type" class="form-control"><br>
							<option value="none" selected disabled hidden> Title</option>
							<option value="breakfast">Breakfast</option>
							<option value="lunch">Lunch</option>
							<option value="dinner">Dinner</option>
							</select>
							</div>
                            </div>
							<div class="form-floating">
							<select name="ftype" id="ftype" class="form-control"><br>
							<option value="none" selected disabled hidden> Select Food type</option>
							<option value="veg">Veg</option>
							<option value="veg">Non-Veg</option>
							<option value="veg">Veg & Non-Veg</option>
							</select>
							</div>
                          
                            <div class="form-floating">
							<select name="quantity" id="type" class="form-control"><br>
							<option value="none" selected disabled hidden> Quantity</option>
							<option value="2-5 persons">2-5 persons</option>
							<option value="6-10 persons">6-10 persons</option>
							<option value="10-20 persons">10-20 persons</option>
							<option value="20-50 persons">20-50 persons</option>
							<option value="50-100 persons">50-100 persons</option>
							<option value="100 & above persons">100 & above persons</option>
							</select>
							</div>
							
							<br>
							
						
							
							
							</div>
							<br>
							 <div class="row g-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="descp" placeholder="Leave a message here" style="height: 150px; width=device-width"></textarea>
                                    <label for="remail">Description</label>
                                </div>
                            </div>
						</div>
						<br>
						 <div class="row g-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="foodimage" placeholder="Image" style="width=device-width" required>
                                    <label for="raddress">Choose Image</label>
                                </div>
                            </div>
						</div>
						<br>
						<br>
						<div class="row g-2">
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="btnsubmit" style="width=device-width">Add</button>
                            </div>
							
						</div>
                    </form>
				</div>	
			</div>
        </div>
		
    <!-- registration End -->


    


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