<?php
 $data = Inpsyde_REST_API::callback();
 ?>
<table>
    <tbody class='users'>
        <tr class="titles">
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
    <?php
        foreach( $data as $key=>$users ) {
            $id = $users["id"]; 
            $name = $users["name"]; 
            $username = $users["username"]; 
            $email = $users["email"]; 
    ?>
        
        <tr class="user" id="<?php echo $id ?>">
        <div class="display_details" id="<?php echo 'display_details_' . $id ?>"></div>        
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
    </tbody>
</table>
 