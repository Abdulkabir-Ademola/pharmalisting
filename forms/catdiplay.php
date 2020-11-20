<h2 class="text-center">CATEGORY</h2>

<table class="table table-responsive">
<?php 
   
     			//create Category object
           $userdetail = new Category; 
    ?>

 				<thead>
	 				<tr>
	 					
	 					<th>s/n</th>
	 					<th>Category name</th>
	 					<th>Edit</th>
	 					<th>Action</th>
	 				</tr>
 				</thead>

 				<tbody>
           <?php

 			$kounter=1;
 						
		foreach ($userdetail->getcat() as $key => $value) {
						//  var_dump($value);
						//  exit();
 					
 					?>
 					<tr>
 						<td><?php echo $kounter++;?></td>
 					
 						<td><?php echo $value['cat_name'];?></td>
 					
 						<td>

            <a href = "../forms/editcat.php?cat_id=<?php echo $value['cat_id'];?>&cat_name=<?php echo $value['cat_name'];?> ">Edit</a>
             </td> 
             <td><a href="#">Delete</a></td>
             
           </tr>
           <?php



               }

               
      ?>

 				</tbody>
 			</table>


