<?php
 include"../oop/pharmacyclass.php";
include"header.php";


?>

<div class="row justify-content-center">
  <div class="col-md-3">
  
<div class="login-wrapper" style='border:1px solid green'>
                    <form class="form-signin" action="drugcheck.php" method='post' >
                      <div class="text-center mb-4">
                      </div>
                     <div class="form-label-group mb-3">
                        <input type="text" name="drugs_type" class="form-control" placeholder="drugs_type" value="" required>
                      </div>

                      <div class="form-label-group mb-3">
                        <input type="text" name="drugsname" class="form-control" placeholder="drugs_name" value="" required>
                       

                      </div>

                      <div class="checkbox mb-2">
                        <label>
                       
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Add Drug</button>
                    </form>

</div>

  </div>

</div>


<?php   include"footer.php";
?>