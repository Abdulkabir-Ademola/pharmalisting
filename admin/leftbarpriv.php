
<?php 
// echo "<pre>";
// print_r($_SESSION['priviledges']);
// echo "</pre>";
 ?>

<ul>
	




<!-- 	
	<?php  
$privs=$_SESSION['priviledges'];
if(count($privs)>0){
	foreach ($privs as $key => $value) {
		
	
	?>
<li><a href="<?php echo $value['task'];?>">
	<?php echo $value['label'];?>
</a></li>

	<?php 
}
} -->


	 ?>
	 <li>
	 	<a href="logout.php" title="">logout</a>
	 </li>
</ul>

private function getpriviledges($rolesid){
  $priviledges=[];
  switch ($rolesid) {
    //admin
    case '1':
      $priviledges[]=['task'=>'dashboard.php','label'=>'Dashboard','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>1];
      $priviledges[]=['task'=>'listpharmacies.php','label'=>'pharmacies','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>2];
      $priviledges[]=['task'=>'newdrug.php','label'=>'Add New drug','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>3];
      $priviledges[]=['task'=>'pharmacyaddress.php','label'=>'pharmaciesaddress','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>4];
      $priviledges[]=['task'=>'deleteusers.php','label'=>'Delete pharmacy','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>5];
      $priviledges[]=['task'=>'viewdrugs.php','label'=>'All drug','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>6];
     
      break;
    case '2':
      $priviledges[]=['task'=>'dashboard.php','label'=>'Dashboard','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>1];
      $priviledges[]=['task'=>'adddrug.php','label'=>'Add drug','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>8];
      $priviledges[]=['task'=>'viewdrugs.php','label'=>'All drug','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>6];
      $priviledges[]=['task'=>'updatestatus.php','label'=>'Update status','rolesid'=>$rolesid,'ismenu'=>'yes','sort'=>7];
      break;
    
    default:
      # code...
      break;
  }
  $_SESSION['priviledges'] = $priviledges;
}