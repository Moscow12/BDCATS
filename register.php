<?php include('Server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Register</title>
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
	<h1>This is for register</h1>
</div>
		<div class="jumbotron"><p></p>
			<p>This assgniments contains register form 
				<img src="image/bro.jpg" class="img-circle" alt="responsive image" style="width:10%;" >

			</p>
		
		<form action="Register.php">
			<?php include('errors.php'); ?>
			<div  class="form-group input-md">
				<label for="exampleinputText">First Name</label>
				<input type="text" class="form-control" id="exampleinputText" placeholder="First Name">
			</div>
			<div  class="form-group input-md">
				<label for="exampleinputText">Last Name</label>
				<input type="text" class="form-control" id="exampleinputText" placeholder="Last Name">
			</div>
			<div class="form-group input-md">
				<label for="exampleinputEmail">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="<?php echo $Email; ?>">
			</div>
			<div  class="form-group input-md">
				<label for="exampleinputText">UserName</label>
				<input type="text" class="form-control" id="exampleinputText" placeholder="UserName">
			</div>
			<div  class="form-group input-md">
				<label for="exampleinputNumber">Phone Number</label>
				<input type="number" class="form-control" id="exampleinputnumber" placeholder="Phone number">
			</div>
			<div class="form-group input-md">
				<label for="exampleInputPassword">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="<?php echo $Password; ?>">
			</div>
						<div class="form-group input-md">
				<label for="exampleInputConfirmPassword">Confirm Password</label>
				<input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="Confirm Password">
			</div>
			
			<!--<div class="form-group ">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-leval help text here</p>
			</div>
			<div class="checkbox">
				<label ><input type="checkbox"> Check me out</label>

			</div>-->
			<div class="well well-success">
			
			<a href="#" class="btn btn-primary btn-md" algin="right" role="button">Register</a>
			<p>You are arleady a member? 
			<a href="login.php" class="btn btn-primary btn-md" algin="right" role="button">login</a>
			</p>
			</div>
		</form>	
	</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>



   <body>
  </html>