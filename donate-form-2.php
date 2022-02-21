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
echo"Thank you For your donate";
?>