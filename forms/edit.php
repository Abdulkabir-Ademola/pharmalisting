<?php 
session_start();

 include"header.php";
include('../oop/pharmacyclass.php');
if(!empty($_GET['user_id'])){
	$pharm=new Pharmacy;
	$userdetail=$pharm->getpharm($_GET['user_id']);
	if(!$userdetail){
	//	header("Location: login.php?msg='Unknown User'");
	}
}else{
	//header("Location: login.php");
}

?>

<div class="container-fluid">






<!--login form -->


<div class="row justify-content-center" > 
<div class="col-md-5"style='border:1px solid green'>
<!-- login -->

 <div class="register-wrapper">
                    <form action='updatecat.php' method='post' class="form-signin">
                      <div class="text-center mb-4">
                        <img class="mb-4" src="images/.png" alt="" width="72" height="72">
                        <h3 class="mb-3 font-weight-normal">Edit Profile</h3>
                      </div>

                      <div class="form-label-group mb-3">
                        <input type="hidden" name="users_id" class="form-control" placeholder="Pharmacy Name" value="<?php echo $userdetail['users_id']; ?>" >
                      </div>

                      <div class="form-label-group mb-3">
                      <label>Pharmacy Name:</label>
                        <input type="text" name="pharmacy_name" class="form-control" placeholder="Pharmacy Name" value="<?php echo $userdetail['pharmacy_name'];?>">
                      </div>

                      <div class="form-label-group mb-3">
                          <label>Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Fullname" value="<?php echo $userdetail['username'];?>" >
                      </div>

                      <div class="form-label-group mb-3">
                      <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" value="<?php echo $userdetail['email'];?>" >
                      </div>

                      <div class="form-group">
                      <label>Password:</label>
                        <input type="password" name="password" value="<?php echo $userdetail['password'];?>" placeholder="password" class="form-control" >
                      </div>

                     
                       <div class="form-label-group mb-3">
                           <label for="">Phone Number:</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo  $userdetail['phone'];?>" >
                      </div>

                      
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="register">Update</button>
                    </form>










</div>

</div>



</div>





<?php include"footer.php"; ?>
