<h2 class="text-center">DRUGS</h2>

<table class="table table-responsive">
<?php 
   
     			//create Drug object
           $userdetail = new Drug; 
    ?>

 				<thead>
	 				<tr>
	 					
	 					<th>s/n</th>
                         <th>Drug Type</th>
                         <th>Drug Name</th>
	 					<th>Edit</th>
	 					<th>Action</th>
	 				</tr>
 				</thead>

 				<tbody>
           <?php

 			$kounter=1;
 						
		foreach ($userdetail->getdrugs() as $key => $value) {
 					?>
 					<tr>
 						<td><?php echo $kounter++;?></td>
 						<td><?php echo $value['drugs_type'];?></td>
 						<td><?php echo $value['drugsname'];?></td>
 					
 						<td>

            <a href = "#">Edit</a>
             </td> 
             <td><a href="#">Delete</a></td>
             
           </tr>
           <?php



               }

               
      ?>

 				</tbody>
 			</table>


