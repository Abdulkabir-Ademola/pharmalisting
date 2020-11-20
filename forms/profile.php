<?php 
session_start();

if(empty($_SESSION['user_id'])){
	header("Location: login.php?msg=please login first");
}
include"header.php"
?>


<div class="container m-4" style="height:500px;">
     <div class="row justify-content-center">
<div class="col-md-7">


<?php
	echo "Welcome ".$_SESSION['user_name']."<br>How may we help you today?";
     ?>
<a href="edit.php?user_id=<?php echo $_SESSION['user_id'];?>" title="" class="btn btn-warning">
	Edit My Profile
</a>


</div>


     </div>


</div>



<?php
include"footer.php"
?>