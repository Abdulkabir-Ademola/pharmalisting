<?php include"../oop/pharmacyclass.php";
$cat=new Category;
$cat_id=$cat->addcat($_POST['drugcategory']);
header("Location: ../admin/pharmacydash.php?msg='successfully registered'");
?>