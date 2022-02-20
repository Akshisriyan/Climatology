<?php

	function check_login($con)
	{
		if(isset($_SESSION['UserName']))
		{
			$UserName = $_SESSION['UserName'];
			$query = "select * from registration where UserName = '$UserName; limit 1";

			$result = mysqli_query($con,$query);
			if ($result && mysqli_num_rows($result)>0)
			{
               $user_data = mysqli_fetch_assoc($result);
               return $user_data;
			}
		}
		header("location: index.php");
		die;

	}

function random_num($length)
{
     $text = "";
     if($length<5)
     	{
     		$length =5;

     	}

     $len =rand(4,$length);

     for ($i=0; $i < $len ; $i++) { 
        $text .= rand (0,9);

     }

     return $text;
}
