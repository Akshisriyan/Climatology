<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="language" content="english"> 
    <meta http-equiv="content-type" content="text/html">	
<!--mobile responsive-->
<meta name="format-detection" content="telephone=yes"/>
    <meta name="HandheldFriendly" content="true"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<link href="file/boostrap/animate.css/animate.min.css" rel="stylesheet">
    <link href="file/boostrap/aos/aos.css" rel="stylesheet">
    <link href="file/boostrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="file/boostrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="file/boostrap/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="file/boostrap/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="Home.css" rel="stylesheet">
</head>	
<body>

 
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light">CLIMOTOLGY</h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                 
                    <li><a href="donations.html">Donations</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>




<div class="big-box">
<div class="words-box">
<h1>Potect Climate Today</h1>
<p style="text-align: center;">content </p>

 </div>
	<div class="form-box">
	<form method="POST" name="form1" action="donate-form-2.php">
        <p style="text-align: center;">
    <img src="images/11-2-environment-free-png-image.jpeg" alt="">
	<legend>Donate</legend>
	<table class="form-table">
		<tr>
			<td>
			<label for="Fname"  class="required">First Name</label></td>
			<td><input type="text" class="input-box" name="Fname" Required>	</td>
		
			<td>
			<label for="Lname"  class="required">Last Name</label></td>
			<td><input type="text" class="input-box" name="Lname" Required>	</td>
		</tr>
		<tr>
			<td>
			<label for="emailname"  class="required">EMail</label></td>
			<td><input type="email" class="input-box" name="emailname" Required>	</td>
		
			<td>
			<label for="tp">Phone</label></td>
			<td><input type="telephone" class="input-box" name="tp" Required>	</td>
		</tr>
		<tr>
			<td>
			<label for="add">Address</label></td>
			<td><input type="text" class="input-box" name="add">	</td>
		
			<td>
			<label for="ct">City</label></td>
			<td><input type="text" class="input-box" name="ct" >	</td>
		</tr>
		<tr>
			<td>
			<label for="st">State</label></td>
			<td><input type="text" class="input-box" name="st" >	</td>
		
			<td>
			<label for="zip">Zip code</label></td>
			<td><input type="number" class="input-box" name="zip" min="10" >	</td>
		</tr>
		<tr>
			<td>
			<label for="cash"  class="required">Amount</label></td>
			<td>
			<input type="number" step="any" class="input-box" name="cash"  min="10" max="10000" value="<?php echo $_POST['donate-value'];?>">
			</td>
		</tr>
		<tr>
			<td>
			<label for="com">Comment</label></td>
			<td colspan="3"><textarea class="input-box" placeholder="Feel Free to comment"></textarea>		</td>
		</tr>
	</table>
    
	<input type="reset" value="Clear" class="reset-button">
	<input type="submit" value="Donate" class="sub-button"></p>
	</form>
	
	</div>
	<div class="othermethods">
	<h1>Other Donation Methods</h1><br><br><br>
	<span>
	<a class="pay-link1" href="#"><img src="paypal.png" alt="paypal"/></a><br><br>
	<a class="pay-link2" href="#"><img src="hnb.jpg" alt="hnb"/></a>
	</span>
	</div>
	
</div>
<!-- ........................................................-->
<!--footer start here  -->
  <!-- Site footer -->
      <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="Home.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="aboutus.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="projectlink.html">Project Lsit</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="ourarticals.html">Our Articles</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="login.php">Sign up</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> Climotolgy</li>
                            <li><i class="bx bx-chevron-right"></i> Climotolgy</li>
                            <li><i class="bx bx-chevron-right"></i> Climotolgy</li>
                            <li><i class="bx bx-chevron-right"></i> Climotolgy</li>
                            <li><i class="bx bx-chevron-right"></i> Climotolgy</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>

                            <strong>Phone:</strong> +945565665656<br>
                            <strong>Email:</strong> Climotolgy@gamil.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Climotolgy</h3>
                        <p>Content.</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Climotology</span></strong>. All Rights Reserved
            </div>

    </footer>


    <script src="file/boostrap/purecounter/purecounter.js"></script>
    <script src="file/boostrap/aos/aos.js"></script>
    <script src="file/boostrap/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="file/boostrap/glightbox/js/glightbox.min.js"></script>
    <script src="file/boostrap/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="file/boostrap/swiper/swiper-bundle.min.js"></script>
    <script src="file/boostrap/waypoints/noframework.waypoints.js"></script>

    <script src="Home.js"></script>

<?php

	


?>
</body>
</html>