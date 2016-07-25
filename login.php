<?php
// Turn off all error reporting
error_reporting(0);
?>

<?php
	
	session_start();

	if($_GET["logout"]==1 AND $_SESSION['id'])
	{
		session_destroy();
		$message="You've been logged out. Have a nice day";
	}
	
	include("connection.php");

	if($_POST['submit']=="Sign Up")
	{
		if(!$_POST['email'])
		{
			$error.="<br>Please enter your email.";
		}
		else
		{
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
				$error.="<br>Please input a valid email address";
			}
		}

		if(!$_POST['password'])
		{
			$error.="<br>Please enter your password.";
		}
		else
		{
			if(strlen($_POST['password'])<8)
			{
				$error.="<br>Please enter a password of atleast 8 characters.";
			}

			if(!preg_match('`[A-Z]`', $_POST['password']))
			{
				$error="<br>Please include atleast one capital letter in your password.";
			}
		}

		if($error)
		{
			$error="<br>There were error(s) in your signup details: ".$error; 
		}
		else
		{
			//$link=mysqli_connect("localhost","pranav", "1234", "pranav");
			$query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'";
			
			$result=mysqli_query($link, $query);

			$results=mysqli_num_rows($result);

			if(!$results==0)
			{
				$error="";
				$error= "That email address is already registered. Do you want to sign in?";
			}
			else
			{
				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";

				mysqli_query($link, $query);

				echo "You've been signed up!";

				$_SESSION['id']=mysqli_insert_id($link);
				header("Location: mainpage.php");

				
			} 
		}
	}

	if($_POST['submit']=="Log In")
	{
		if(!$_POST['loginemail'])
		{
			$error.="<br>Please enter your email.";
		}
		if(!$_POST['loginpassword'])
		{
			$error.="<br>Please enter your password.";
		}

		if($error)
		{
			$error= "There were error(s) in your log in details.".$error;
		}
		else
		{
			//$link=mysqli_connect("localhost","pranav", "1234", "pranav");
			$query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."'LIMIT 1";
			$result=mysqli_query($link, $query);

			$results=mysqli_num_rows($result);

			if($results==0)
			{
				$error="";
				$error= "That email address is not registered. Do you want to sign up?";
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($row)
				{
					$_SESSION['id']=$row['id'];
					header("Location:mainpage.php");
					
				}


			}

		}
	}


?>