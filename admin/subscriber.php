<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your About List</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your About List</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>                   
                    <th>Sl:</th>
                    <th>Email</th>
                    <th>Subscribe At: </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('subscriber') as $key => $single_subscriber) {
                         
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><?= $single_subscriber['email']?></td>
                            <td><?= $single_subscriber['time']?></td>
                            <td><a href="" class = "btn btn-info btn-sm">Send</a></td>
                        </tr>
                        <?php
                        }
                    ?>
                   
                </tbody>
        </table>
        
        
      </div>
    </div>
<?php

    require_once 'inc/d_footer.php';
?>  
  