<!DOCTYPE html>
<html>
    <head>
        <title>Thanks</title>
        <link href="files/animate.css/animate.min.css" rel="stylesheet">
    <link href="files/aos/aos.css" rel="stylesheet">
    <link href="files/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="files/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="files/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="Home.css" rel="stylesheet">
    </head>
    <body>
        
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">

                <img src="images/11-2-environment-free-png-image.jpeg" alt="">
                <h1 class="text-light">CLIMOTOLGY</h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="Home.html">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="projectlink.html">Project List</a></li>
                    <li><a href="login.php">Our Articles</a></li>
                    <li><a href="login.php">Sign up</a></li>
                    <li><a href="donations.html">Donations</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <p style="text-align: center;">
    <img src="images/11-2-environment-free-png-image.jpeg" alt="">
<?php

$host="localhost";
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];

$con=@mysqli_connect($host,"root","","donate");
$sql="INSERT INTO doante(fname,lname) VALUES ('$fname','$lname')";
if($con)
{
    mysqli_query($con,$sql);
}
echo"<h1><center>Thank you For your donate</h1></center>";
?>
</p>

<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="home.html">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="projectlink.html">Project Lsit</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="login.php">Our Articles</a></li>
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


<script src="files/purecounter/purecounter.js"></script>
    <script src="files/aos/aos.js"></script>
    <script src="files/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="files/glightbox/js/glightbox.min.js"></script>
    <script src="files/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="files/swiper/swiper-bundle.min.js"></script>
    <script src="files/waypoints/noframework.waypoints.js"></script>

    <script src="Home.js"></script>
    </body>
</html>