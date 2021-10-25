<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Address</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your About List</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>Sl:</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address Link</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('contact') as  $single_address) {
                         
                        ?>
                        <tr>
                            <td><?= $single_address['id']?></td>
                            <td><?= $single_address['address']?></td>
                            <td><?= $single_address['email']?></td>
                            <td><?= $single_address['phone_number']?></td>
                            <td><?= $single_address['ifrem_link']?></td>
                            <td><a href="create_contact.php?id=<?= $single_address['id']?>" class="btn btn-info btn-sm">Edit</a></td>
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
    <?php
    if (isset( $_SESSION ['contact_updated'] )) {

    ?>
          <script>
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })
      
                Toast.fire({
                  icon: 'success',
                  title: '<?=  $_SESSION ['contact_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>

<?php
    session_unset();
?>
