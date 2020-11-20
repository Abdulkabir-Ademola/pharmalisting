<?php include"../oop/pharmacyclass.php";
$pharms=new Authenticate("localhost","root","","pharmacy");


if($_POST['password'] != $_POST['confirm_password']){
	echo "your password and confirm password do not match.please retry";
	exit();

}
$pwd=$_POST['password'];
if(strlen($pwd)<6){
	echo "Your password should not be less than 6 characters. please retry";
}

$pharmacy_id=$pharms->register($_POST['pharmacy_name'],$_POST['username'],$_POST['email'],$_POST['password'],($_POST['phone']));

	header("Location: login.php?msg='successfully registered'");



?>