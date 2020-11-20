
<?php 
 include"../oop/pharmacyclass.php";
include"header.php"; 

?>

<div class="container-fluid ">






<!--login form -->


<div class="row justify-content-end" style='height:700px;margin-top:40px;'> 
<div class="col-md-4 mt-5" style="border:1px solid green;height:550px;">
<!-- login -->

 <div class="register-wrapper">
                    <form action='regcheck.php' method='post' class="form-signin">
                      <div class="text-center mb-4">
                        <img class="mb-4" src="../images/pharmslg.png" alt="" width="72" height="72">
                        <h3 class="mb-3 font-weight-normal">Register</h3>
                      </div>

                      <div class="form-label-group mb-3">
                        <input type="text" name="pharmacy_name" class="form-control" placeholder="Pharmacy Name" value="" required>
                      </div>

                      <div class="form-label-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Fullname" value="" required>
                      </div>

                      <div class="form-label-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email address" value="" required>
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" value="" placeholder="password" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <input type="password" name="confirm_password" value="" placeholder="confirm password" class="form-control" required>
                       </div>
                       
                       <div class="form-label-group mb-3">
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="" required>
                      </div>

                      
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="register">Register</button>
                    </form>










</div>

</div>



</div>





<?php include"footer.php"?>