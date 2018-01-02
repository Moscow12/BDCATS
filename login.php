<!DOCTYPE html>

<!-- -Walter put this comment today-->

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>firstly</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style.css">
<!-- css stylesheet for jumbotro-->
<style>
.jumbotron{
	background-color: #2E2D88;
	color: white;

}
.tab-content{
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	padding: 10px;
}
.nav-tabs{
	margin-bottom: 0;
}

.well{
	color: red;
}

</style>
  </head>
<body>
<div class="container">
<div class="page-header">
	<h1>This is Hussen Lema Assgniment</h1>
	<a href="register.html" >Register</a>
</div>
		<div class="jumbotron"><p></p>
			<p>This assgniments contains register and login form 
				<img src="image/bro.jpg" class="img-circle" alt="responsive image" style="width:10%;" >

			</p>
		
		<form action="login.php">
			<div class="form-group input-md">
				<label for="exampleinputEmail">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
			</div>
			<div class="form-group input-md">
				<label for="exampleInputPassword">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
			</div>
			<div class="form-group ">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-leval help text here</p>
			</div>
			<div class="checkbox">
				<label ><input type="checkbox"> Check me out</label>

			</div>
			<div class="well well-lg">
			<a href="login.php"  class="btn btn-info" role="button">login</a>
			<p>Not yet Registered?
			<a href="register.php" class="btn btn-primary btn-md" role="button">Register</a>
			</div>

		</form>	
	</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>



   <body>
  </html>