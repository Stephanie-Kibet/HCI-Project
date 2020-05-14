<?php
session_start();
$fname ="";
$email ="";
$errors= array();
$db = mysqli_connect('localhost','root','','user') or die;
if(isset($_POST['create'])){
	$create=$_POST['create'];
}
if (isset($_POST['fname'])) {
	$fname=$_POST['fname'];# code...
}
if (isset($_POST['lname'])) {
	$lname=$_POST['lname'];# code...
}
if (isset($_POST['phone'])) {
	$phone=$_POST['phone'];# code...
}
if (isset($_POST['pass'])) {
	$pass=$_POST['pass']# code...
}
if (isset($_POST['email'])) {
	$email=$_POST['email'];# code...
}
if (isset($_POST['usertype'])) {
	$usertype=$_POST['usertype'];# code...
}
if (empty($fname)) {
	array_push($errors, "Name is required");# code...
}
if (empty($lname)) {
	array_push($errors, "Name is required");# code...
}
if (empty($phone)) {
	array_push($errors, "Phone Number is required");# code...
}
if (empty($pass)) {
	array_push($errors, "Password is required");# code...
}
if (empty($email)) {
	array_push($errors, "Email Address is required");# code...
}
if (empty($usertype)) {
	array_push($errors, "User Type is required");# code...
}
if (count($errors)==0) {
	$pass = md5($pass);
	$query = "INSERT INTO register (fname,lname,phone,email,pass,usertype) VALUES ('$fname','$lname','$phone','$email','$pass','$usertype')";
	mysqli_query($db,$query);
	$_SESSION['$fname']=$fname;
	$_SESSION['success']="You have created an account";
	//header('Location:index.php');# code...
}
?>