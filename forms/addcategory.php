<?php 
 include"../oop/pharmacyclass.php";
include"header.php"; 

?>
<div class="container">

<div class="row justify-content-center">
 <div class="col-md_2">
 <div class="form-group mx-sm-3 mb-2">
 <form action="catcheck.php" method='post'>
    <label for="cat" class="sr-only">ADD CATEGORY</label>
    <input type="text" class="form-control" name='drugcategory' id="cat" placeholder="Add Category">
  </div>
     <button type="submit" class="btn btn-primary btn-block mb-2" name='submit'>Add CATEGORY</button>
</form>
     

 </div>
</div>


</div>



<?php include"footer.php"?>