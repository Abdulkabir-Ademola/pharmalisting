<?php
include('header.php');
include('../oop/pharmacyclass.php');

$pharm=new Category;
$value=$_GET['cat_id'];
$name = $_GET['cat_name'];
// var_dump($value) ;
// exit();
?>

<div class="row justify-content-center">
 <div class="col-md-2">
 <div class="form-group mx-sm-3 mb-2">
 <form action="updatecat.php" method='post'>
 
    <label for="cat" class="sr-only">UPDATE CATEGORY</label>

    <input type="hidden" class="form-control" name='cat_id' value="<?php echo $value;?>" id="cat" placeholder="Add Category">
    <input type="text" class="form-control" name='cat_name' value="<?php echo $name;?>" id="cat" placeholder="Update Category">
  </div>
     <button type="submit" class="btn btn-primary btn-block mb-2" name='submit'>UPDATE CATEGORY</button>
</form>

     <?php include"footer.php";?>    