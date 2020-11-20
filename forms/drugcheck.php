<?php include"../oop/pharmacyclass.php";
$cat=new Drug;
$cat_id=$cat->adddrug($_POST['drugs_type'],$_POST['drugsname']);

header("Location: ../admin/pharmacydash.php?msg='successfully registered'");
?>