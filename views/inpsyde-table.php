<?php
 $data = Inpsyde_Plugin::callback();
 ?>
     <table>
         <tr class="titles">
             <th>Id</th>
             <th>Name</th>
             <th>Username</th>
             <th>Email</th>
         </tr>
 <?php
 foreach( $data as $key=>$users ) {
 ?><tr><?php
     $id = $users["id"]; 
     $name = $users["name"]; 
     $username = $users["username"]; 
     $email = $users["email"]; 
 ?>
     <td>
         <a href="#"><?php echo $id ?></a>
     </td>
     <td>
         <a href="#"><?php echo $name ?></a>
     </td>
     <td>
         <a href="#"><?php echo $username ?></a>
     </td>
     <td>
         <a href="#"><?php echo $email ?></a>
     </td>  
     </tr>
 <?php } ?>
</table>
 