<h2 class="text-center">PHARMACY DETAILS</h2>

<table class="table table-responsive">
<?php 
   
     			//create Category object
           $userdetail = new Pharmacy; 
    ?>

 				<thead>
	 				<tr>
	 					
	 					<th>S/N</th>
	 					<th>Pharmacy Name</th>
	 					<th>FullName</th>
	 					<th>Email Address</th>
	 					<th>Phone Number</th>
	 					<th>Edit</th>
	 					<th>Action</th>
	 				</tr>
 				</thead>

 				<tbody>
           <?php

 			$kounter=1;
 						
		foreach ($userdetail->users() as $key => $value) {
 						
 					
 					?>
 					<tr>
 						<td><?php echo $kounter++;?></td>
 						<td><?php echo $value['pharmacy_name'];?></td>
 						<td><?php echo $value['username'];?></td>
 						<td><?php echo $value['email'];?></td>
 						<td><?php echo $value['phone'];?></td>
 					
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


