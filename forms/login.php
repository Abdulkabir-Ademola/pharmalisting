<?php
include"header.php";
include"../oop/pharmacyclass.php";

$login_error=array();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['login'] == "login") {
  # code...
  $email = $_POST['email'];
  $password = $_POST['password'];

  //validate the email field
  if (empty($email)) {
    # code...
    $login_error['email'] = "<div class='text-danger'>Email Address field is required</div>";

  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    # to check if the email is a proper email
    $login_error['email'] = "<div class='text-danger'>Email Address is not valid</div>";

  }

  //validate password field
  if(empty($password)){
    $login_error['password'] = "<div class='text-danger'>Password field is required</div>";
  } elseif (strlen($password) < 6) {
    # code...
    $login_error['password'] = "<div class='text-danger'>Password length is less than 6 characters </div>";
  }

  //check if there is no validation error
  if (count($login_error) == 0) {
    # create object of the authentication
    $userauth = new Authenticate;
//exit();
    $output = $userauth->login($email, $password);
  }

}

	 ?>



<div class="container" >
<div class="row justify-content-end" style='height:400px; margin-top:30px'>
  <div class="col-md-4">

  <?php



if (isset($output)) {
  
  echo $output;
}
?>
  <div class="login-wrapper" style='border:1px solid green'>
                    <form class="form-signin" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>' method='post' >
                      <div class="text-center mb-4">
                        <img class="mb-4" src="../images/pharmslg.png" alt="" width="72" height="72">
                        <h3 class="mb-3 font-weight-normal">Sign in</h3>
                      </div>

                      <div class="form-label-group m-3">
                        <input type="email" name="email" class="form-control" placeholder="Email address" value="<?php 
			                    		if(isset($_POST['email'])){
			                    			echo $_POST['email'];
			                    		} 
			                    		?>" required>
                               <?php if(isset($login_error['email'])){ echo $login_error['email'];} ?>

                      </div>

                      <div class="form-label-group m-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" value="" required>
                        <?php if(isset($login_error['password'])){ echo $login_error['password'];} ?>

                      </div>

                      <div class="checkbox ml-4">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Sign in</button>
                    </form>

                     <div class="text-center">
                        <small><a href="#!" class="text-muted m-2">Forgot password?</a></small>
                        <p class="">Don't have an account? <a href="register.php" class="">Register here</a></p>            
</div>


  </div>



</div>



</div>

<?php include"footer.php"?>
