<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Offer</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your offer</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>Sl:</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('price') as $key=> $single_offer) {
                         
                        ?>
                        <tr>
                            <td><?= $key+1?></td>
                            <td><?= $single_offer['category']?></td>
                            <td><?= $single_offer['price']?></td>
                            <td><?= $single_offer['duration']?></td>
                            <td><a href="offer_update.php?id=<?= $single_offer['id']?>" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="offer_delete.php?id=<?= $single_offer['id']?>" class="btn btn-info btn-sm">Delete</a></td>
                        </tr>
                        <?php
                        }
                    ?>
                   
                </tbody>
        </table>
        <a href="crate_price.php" class ="btn btn-secondary">Add New</a>
        
      </div>
    </div>
<?php

    require_once 'inc/d_footer.php';
?>  
    <?php
    if (isset( $_SESSION ['price_added'] )) {

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
                  title: '<?=  $_SESSION ['price_added']?>'
                })
            </script> 
              
        <?php
        }
        ?>

<?php
    if (isset( $_SESSION ['offer_update'] )) {

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
                  title: '<?=  $_SESSION ['offer_update']?>'
                })
            </script> 
              
        <?php
        }
        ?>


<?php
    if (isset( $_SESSION ['offer_deleted'] )) {

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
                  title: '<?=  $_SESSION ['offer_deleted']?>'
                })
            </script> 
              
        <?php
        }
        ?>


<?php
    session_unset();
?>
