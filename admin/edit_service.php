<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Service</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your service</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    
                    <th>Sl:</th>
                    <th>Service Icon</th>
                    <th>Service Title</th>
                    <th>Service Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('services') as $key => $single_service) {
                         
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><i class="<?= $single_service['service_icon']?> fa-2x"></i></td>
                            <td><?= $single_service['service_title']?></td>
                            <td><?= $single_service['service_details']?></td>
                            <td><a href="service_update.php?id=<?= $single_service['id']?>" class="btn btn-info btn-sm">Edit</a></td>
                            <td><button value="service_delete.php?id=<?= $single_service['id']?>" class="btn btn-danger btn-sm delete_btn">Delete</button></td>
                        </tr>
                        <?php
                        }
                    ?>
                   
                </tbody>
        </table>
        <a href="create_service.php" class = "btn  btn-secondary">Add New</a>
        
      </div>
    </div>
<?php

    require_once 'inc/d_footer.php';
?>
    <?php
    if (isset( $_SESSION ['service_added'] )) {

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
                  title: '<?=  $_SESSION ['service_added']?>'
                })
            </script> 
              
        <?php
            }

        ?>
    <?php
    if (isset( $_SESSION ['service_updated'] )) {

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
                  title: '<?=  $_SESSION ['service_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>
    <?php
    if (isset( $_SESSION ['service_deleted'] )) {

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
                  title: '<?=  $_SESSION ['service_deleted']?>'
                })
            </script> 
              
        <?php
        }
        ?>
<?php
    session_unset();
?>

<script>
  $('.delete_btn').click(function(){
    var link = $(this).val();
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = link;
      }
    })
  })
</script>