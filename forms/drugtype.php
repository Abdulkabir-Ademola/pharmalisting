


</select>
    <!-- Single button -->
    <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          DRUG TYPE <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
          <?php
              include_once('../oop/pharmacyclass.php');
              $cats = new Drug;
              
                  foreach ($cats->alldrugs() as $key => $value) {
                  # code...?>
                <li><?php echo $value['drugs_type'];?></li>

              <?php
                  }  


          ?>
            
          </ul>
        </div>
	