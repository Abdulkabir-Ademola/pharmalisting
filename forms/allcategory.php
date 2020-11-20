




        <!-- Single button -->
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          DRUG CATEGORY <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
          <?php
              include_once('../oop/pharmacyclass.php');
              $cats = new Category;
              
                  foreach ($cats->allcategory() as $key => $value) {
                  # code...?>
                <li><?php echo $value['cat_name'];?></li>

              <?php
                  }  


          ?>
            
          </ul>
        </div>
	




