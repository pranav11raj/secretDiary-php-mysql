
 <?php

 	include("login.php");

 ?>
 <!--
 		<form method="post">
			<label for="email"> E Mail </label>
			<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>">
			<label for="password"> Password </label>
			<input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>">
			<input type="submit" name="submit" value="Sign Up">

		</form>


		<form method="post">
			<label for="email"> E Mail </label>
			<input type="email" name="loginemail" id="email" value="<?php echo addslashes($_POST['email']); ?>">
			<label for="password"> Password </label>
			<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>">
			<input type="submit" name="submit" value="Log In">

		</form>
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project: Secret Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
  

  #center
  {
    text-align: center;
  }

  
  #topContainer
  {
    background-image: url("background.jpg");
    height:400px;
    width:100%;
    background-size: cover;
  }
  #topRow
  {
    margin-top:100px;
    text-align:center;
  }

  #topRow h1
  {
    font-size:300%;
  }

  .bold
  {
    font-weight: bold;
  }
  .marginTop
  {
    margin-top: 30px;
  }
  .white-font
  {
  	color: #e6e6e6;
  }

  </style>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          
          </button>
        <a class="navbar-brand" href="">Secret Diary</a>
        </div>
        <div class="collapse navbar-collapse">

        	<form method="post" class="navbar-form navbar-right">
          	<div class="form-group">
				<label for="email" class="white-font"> E Mail </label>
				<input type="email" name="loginemail" id="email" value="<?php echo addslashes($_POST['email']); ?>">
			</div>
			<div class="form-group">
				<label for="password" class="white-font"> Password </label>
				<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>">
			</div>
			<input type="submit" name="submit" value="Log In" class="btn btn-success">

		</form>
          
          

          
         
      </div>
    </div>
  </div>

  <div class="container white-font" id="topContainer">

    <div class="row">

      <div class="col-md-6 col-md-offset-3" id="topRow">
        <h1 class="marginTop"> Secret Diary </h1>
        <p class="lead">Your own private diary, with you wherever you go.</p>
        <?php

        	if($error)
        	{
        		echo '<div class="alert alert-danger"> '.addslashes($error).'</div>';
        	}
        	if($message)
        	{
        		echo '<div class="alert alert-success"> '.addslashes($message).'</div>';
        	}


        ?>

        <p class="bold">Interested? Sign up now!</p>

        <form method="post">
          

          	<div class="form-group">
	          	<label for="email"> E Mail </label>
	          	
				<input type="email" name="email" id="email" class="form-control" placeholder="email@email.com" value="<?php echo addslashes($_POST['email']); ?>">
			</div>
			<div class="form-group">
				<label for="password"> Password </label>
				<input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['password']); ?>">
			</div>
			<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">


        </form>



      </div>
    </div>



  </div>

  





    
  



  






    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $("#topContainer").css("height", $(window).height());
    </script>
    
  </body>
</html>




