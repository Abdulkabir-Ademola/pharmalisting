
<?php include"../oop/pharmacyclass.php";
$cat=new Category;
//var_dump($_POST['cat_id']);exit();
$cat_id=$cat->updatecate($_POST['cat_id'],$_POST['cat_name']);
header("Location: ../admin/pharmacydash.php?msg='successfully registered'");

?>