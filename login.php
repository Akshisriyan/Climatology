<?php 
session_start();
    include("connection.php");
    include("function.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
{

        	$FullName = $_POST['FullName'];
        	$UserName = $_POST['UserName'];
        	$Password = $_POST['Password1'];
        	

        	if(!empty($UserName) && !empty($Password))
    {
          
        	$query = "select * from registration where UserName= '$UserName' limit 1";
        	$result = mysqli_query($con,$query);

        if($result)
        {
            if ($result && mysqli_num_rows($result) > 0)
			{
               $user_data = mysqli_fetch_assoc($result);
               
               if($user_data['Password1'] === $Password);
               {
               //Donation page 
               	header("Location: donate-form-2.php ");
               	die;
               }
                echo "Wron information";
			}else
			{
				echo "Please enter some valid information !";
			}


        }
    }

}


?>


<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="registrationstyle.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="regcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="regcss/fontawesome-all.min.css">
</head>
<body>
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
          		<a class="nav-link" href="ourarticals.html">Our Articles</a>
        	</li>
		  	<li class="nav-item">
          		<a class="nav-link" href="donations.html">Donations</a>
        	</li>
			<li class="nav-item">
          		<a class="nav-link" href="login.php">Sign Up</a>
        	</li>
      	</ul>
    </div>
  </div>
</nav>
	<div class="container" style="font-weight:bold;">
		<div class="header">
			<br><br><br><br>
			<h1>Login</h1>
			<h2>If you want to DONATE You Must Register Here First.</h2>
		</div>
		<form action="login.php" method="post">


<div>
	<br><br>
	<label for="UserName">UserName : </label>
	<input type="text" name="UserName"required >
</div>
    <br><br><br>
<div>
	<label for="Password">Password : </label>
	<input type="password" name="Password1"required>
</div>
<br><br>



<button type="submit" name="login">Log in</button>
<p> Not a User?<a href="registration.php"><b>Register here</b></a></p>

		</form>
		</div>	
<script src="regjs/jquery.min.js"></script>
<script src="regjs/popper.min.js"></script>
<script src="regjs/bootstrap.min.js"></script>
<script src="regjs/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>