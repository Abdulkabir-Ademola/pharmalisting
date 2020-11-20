<?php include"pharmhead.php"; ?>

    
<?php include"leftside.php";?>
           
                                       

  <div class="content" >


 
          
        <div class="card">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="card">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="card">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>

    <?php   
        include"../forms/allcategory.php"; 

        include"../forms/drugtype.php"; 

      include"../forms/drugname.php";   

    ?>
      <div class="row justify-content-center ">

              <div class="col-md-4">
              <!-- category display -->
              <?php 
                  include"../forms/catdiplay.php";
              ?>  
              <!-- category display end -->
              </div>

              <div class="col-md-6">
              <!-- category display -->
              <?php 
                  include"../forms/drugdisplay.php";
              ?>  
              <!-- category display end -->
              </div>



      </div>
      <div class="row justify-content-center">
   <div class="col-md-10">
            <?php 
                  include"../forms/pharmdisplay.php";
              ?>  
            



   </div>

      </div>



<?php include"footer.php";?>