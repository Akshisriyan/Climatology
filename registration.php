<?php 
session_start();
    include("connection.php");
    include("function.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

        	$FullName = $_POST['FullName'];
        	$UserName = $_POST['UserName'];
        	$Password = $_POST['Password1'];
        	$Email = $_POST['Email'];
        	$DOB = $_POST['DOB'];
        	$TelNo = $_POST['TelNo'];

        	if(!empty($UserName) && !empty($Password))
        	{
          $User_ID = random_num(20);
        	$query = "insert into userinfo (FullName,UserName,Password,Email,DOB,TelNo) values ('$FullName','$UserName','$Password','$Email','$DOB','$TelNo')";

        	mysqli_query($con,$query);

        	header("location: login.php");
        	die;
          }else
          {
          	echo "Please enter some valid informatiom";
        }
      }


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="regcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="regcss/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="registrationstyle.css" rel="stylesheet">
</head>
<body >
	<video autoplay muted loop id="Video1">
  <source src="video1.mp4" type="video/mp4">
</video>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  		<div class="container-fluid">
    		<a class="navbar-brand" id="logo" style="color:white;">CLIMATOLOGY</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      	<ul class="navbar-nav">
        	<li class="nav-item">
          		<a class="nav-link active" href="Home.html">Home</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="aboutus.html">About</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="projectlink.html">Project List</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="login.php">Blog</a>
        	</li>
		  	<li class="nav-item">
          		<a class="nav-link" href="login.php">Signup</a>
        	</li>
      	</ul>
    </div>
  </div>
</nav>

  <br><br><br><br>
  
	<form action="registration.php" style="border:1px solid #ccc" method="post">
  <div class="container" id="form" style="font-weight:bold;">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
<div>
	<hr>
	<label for="FullName"><b>Full Name :</b> </label>
	<input type="text" name="FullName" required>
</div>
<br>
<div>
	<label for="UserName"><b>Username :</b> </label>
	<input type="text" name="UserName" required>
</div>
<br>
<div>
	<label for="Password"><b>Password :</b> </label>
	<input type="password" name="Password1" required>
</div>
<br>
<div>
	<label for="Password"><b>Confirm Password :</b> </label>
	<input type="password" name="Password2" required>
</div>
<br>
<div>
	<label for="Email"><b>Email : </b></label>
	<input type="text" name="Email" required>
</div>
<br>
<div>
	<label for="DateOfBirth"><b>Date of birth :</b> </label>
	<input type="Date" name="DOB" required>
</div>
<br>
<div>
	<label for="TelNo"><b>Telephone Number :</b> </label>
	<input type="text" name="TelNo" required>
</div>
<br>

<button type="submit" name="regUser" >Register</button>
<p> Already a User?<a href="login.php"><b>Login</b></a></p>

	</form>
		</div>
<script src="regjs/jquery.min.js"></script>
<script src="regjs/popper.min.js"></script>
<script src="regjs/bootstrap.min.js"></script>
<script src="regjs/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>