<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Register</h2>
		</div>
		<form action="registration.php" method="post">
<div>
	<label for="FullName">FullName : </label>
	<input type="text" name="FullName" required>
</div>

<div>
	<label for="UserName">UserName : </label>
	<input type="text" name="UserName" required>
</div>

<div>
	<label for="Password">Password : </label>
	<input type="password" name="Password1" required>
</div>

<div>
	<label for="Password">Confirm Password : </label>
	<input type="password" name="Password2" required>
</div>

<div>
	<label for="Email">Email : </label>
	<input type="Email" name="Email" required>
</div>

<div>
	<label for="DateOfBirth">Date of birth : </label>
	<input type="Date" name="DOB" required>
</div>

<div>
	<label for="TelNo">Telephone Number : </label>
	<input type="Number" name="TelNo" required>
</div>


<button type="submit" name="regUser">Register</button>
<p> Already a User?<a href="login.php"><b>Login</b></a></p>

		</form>
		</div>	
</body>
</html>