<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Clint Description</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your Clint Description</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    
                    <th>Clint Description</th>
                    <th>Edit</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php
                        database('client_discription');

                    ?>
                        <tr>
                            <td><?=mysqli_fetch_assoc(database('client_discription'))['clint_discription']?></td>
                            <td><a href="update_description.php" class="btn btn-info btn-sm">Edit</a></td>
                        </tr>
                       
                </tbody>
        </table>
        
        
      </div>
    </div>
<?php

    require_once 'inc/d_footer.php';
?>
    <?php
    if (isset( $_SESSION ['clint_dicsription_updated'] )) {

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
                  title: '<?=  $_SESSION ['clint_dicsription_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>
   
<?php
    session_unset();
?>
