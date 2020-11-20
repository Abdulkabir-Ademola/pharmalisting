<?php session_start();
  include "../oop/pharmacyclass.php";

	//to check if user can have access to portal
	if (!isset($_SESSION['usersid'])) {
  //redirect to login page
  
		header("Location: http://localhost/forms/login.php");
          exit();
	}
//authorization

	$currenturi=$_SERVER['REQUEST_URI'];
	$pageurl = end(explode('/'));
	$pageurl = end(explode($currenturi));
	$pageaccess =0;
	echo $pageurl;
	foreach ($_SESSION['priviledges'] as $key => $value) {	
	if (in_array($pageurl, $value)) {
		$pageaccess=1;
	}
}
if ($pageaccess == 0) {

	header("Location: http://localhost/pharmacy/unauth.php");
          exit();
	}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/animate4.min.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../users.css">
<link rel="stylesheet" href="leftside.css">
    <title>PharmaListing</title>
    <style>
         /* div{
             border:1px solid blue;
         } */
    </style>
</head>
<body>
<div class="container-fluid">
<!-- header -->
    <div class="row">
    <div class="col-md-4">
    <h1><a href="index.php">PharmaListing</a></h1>
    </div>

    <div class="col-md-8">
    <div class="text-right">
    <nav class="navbar navbar-expand-lg navbar-primary ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="../index.php">Home</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../about.php">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  
    </div>
    
    </div>
    </div>
   

    <!-- header end -->
