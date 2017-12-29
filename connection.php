<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['First Name']);
$Email   = $conn->real_escape_string($_POST['Email Address']);
$subj    = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>