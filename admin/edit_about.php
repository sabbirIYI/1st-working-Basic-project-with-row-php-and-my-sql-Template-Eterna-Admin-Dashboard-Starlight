<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your About Section</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your about section</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    
                    <th>Sl:</th>
                    <th>About Photo</th>
                    <th>About Title</th>
                    <th>About Details</th>
                    <th>About End Details</th>
                    <th>Edit</th>
    
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('about') as $key => $single_about) {
                         
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><img class="img-fluid" src="../<?= $single_about['img_location']?>" width="150" height="auto" alt="about img"></td>
                            <td><?= $single_about['about_title']?></td>
                            <td><?= $single_about['about_details']?></td>
                            <td><?= $single_about['about_end_details']?></td>
                            <td><a href="about_update.php?id=<?= $single_about['id']?>" class="btn btn-info btn-sm">Edit</a></td>
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
    if (isset( $_SESSION ['about_added'] )) {

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
                  title: '<?=  $_SESSION ['about_added']?>'
                })
            </script> 
              
        <?php
            }

        ?>
    <?php
    if (isset( $_SESSION ['about_updated'] )) {

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
                  title: '<?=  $_SESSION ['about_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>
    <?php
    if (isset( $_SESSION ['about_deleted'] )) {

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
                  title: '<?=  $_SESSION ['about_deleted']?>'
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