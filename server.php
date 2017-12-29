<?php
$Fname = "";
$Lname = "";
$Email = "";
$UserName = "";
$PhoneNumber = "";
$Password = "";
$ConfirmPassword = "";

//connect to the database
db = mysqli_connect('localhost', 'root', '', 'data1');
	/*$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "data1";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;*/
//register button clicked 
if (isset($_POST['register'])){
	$Fname = mysqli_real_escape_string($_POST['Fname']);
	$Lname = mysqli_real_escape_string($_POST['Lname']);
	$Email = mysqli_real_escape_string($_POST['Email']);
	$UserName = mysqli_real_escape_string($_POST['UserName']);
	$PhoneNumber = mysqli_real_escape_string($_POST['PhoneNumber']);
	$Password = mysqli_real_escape_string($_POST['Password']);
	$ConfirmPassword = mysqli_real_escape_string($_POST['ConfirmPassword']);

	//ensure that form fields are filled properly
	if(empty($Fname)){
		array_push($errors, "First name is Required");
	}
	if(empty($Lname)){
		array_push($errors, "Last name is Required");
	}
	if(empty($Email)){
		array_push($errors, "Email is Required");
	}
	if(empty($UserName)){
		array_push($errors, "UserName is Required");
	}
	if(empty($PhoneNumber)){
		array_push($errors, "PhoneNumber is Required");
	}
	if(empty($Password)){
		array_push($errors, "Password is Required");
	}
	if(empty($ConfirmPassword)){
		array_push($errors, "ConfirmPassword is Required");
	}
	if ($Password != $ConfirmPassword) {
		array_push($errors, "The password doesn't match");
	}
	//if there are no errors, save user to database
	if (count($errors) ==0) {
		$sql ="INSERT INTO users (Fname, Lname, Email, UserName, PhoneNumber, Password, ConfirmPassword)
		    VALUES('$Fname', '$Lname', '$Email', '$UserName', '$PhoneNumber', '$Password', '$ConfirmPassword')";
		    mysqli_query($db, $sql);
		
	}
}


?>