

<div class="row justify-content-center">
<div class="col-md-4">



<select name="category" id="">
<option value="">DRUG TYPE</option>
<?php
  include_once('../oop/pharmacyclass.php');
  $dru = new Drug;
  
      foreach ($dru->alldrugs() as $key => $value) {
      # code...?>
     <option value='<?php echo $value['drugs_type'] ;?>'><?php echo $value['drugs_type'];?>
     
     </option>

  <?php
      }  


?>

</select>




</div>
</div>