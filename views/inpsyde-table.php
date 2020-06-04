<?php
 $data = Inpsyde_REST_API::callback();
 ?>
<table class='users-table'>
    <thead>
        <tr class="titles desktop">
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody class='users'>
        <?php
        foreach( $data as $key=>$users ) {
            $id = $users["id"]; 
            $name = $users["name"]; 
            $username = $users["username"]; 
            $email = $users["email"]; 
        ?>
        <tr class="titles mobile">
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Details</th>
        </tr>
        
        <tr class="user" >
            <div class="modal fade modal-lg" id="myModal_<?php echo $id ?>" role="dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3><span class="glyphicon glyphicon-list-alt"></span> Aditional Details</h3>
                    </div>
                    <div class="modal-body">
                        <div class="display_details" id="<?php echo 'display_details_' . $id ?>"></div>  
                    </div> 
                </div>
            </div>
            <td>
                <p><?php echo $id ?></p>
            </td>
            <td>
                <p><?php echo $name ?></p>
            </td>
            <td>
                <p><?php echo $username ?></p>
            </td>
            <td>
                <p><?php echo $email ?></p>
            </td>
            <td class="additional-details">
                <a href="#" id="<?php echo $id ?>"><span class="glyphicon glyphicon-list-alt"></span></a>
            </td> 
        </tr>
    <?php } ?>
    </tbody>
</table>
 