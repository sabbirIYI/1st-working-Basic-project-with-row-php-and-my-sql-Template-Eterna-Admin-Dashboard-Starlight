<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Banner</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update or delete your banner</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    
                    <th>Sl:</th>
                    <th>Banner Photo</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('clints') as $key => $single_clint) {
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><img class="img-fluid" src="../<?=$single_clint['img_location']?>" width="300" height="auto" alt="banner img"></td>
                            <td><button value="clint_delete.php?id=<?= $single_clint['id']?>" class="btn btn-danger btn-sm delete_btn">Delete</button></td>
                        </tr>
                        <?php
                        }
                    ?>
                   
                </tbody>
        </table>
        <a href="add_brand.php" class ="btn btn-secondary">Add New</a>
        
      </div>
    </div>
<?php

    require_once 'inc/d_footer.php';
?>
    <?php
    if (isset( $_SESSION ['clint_added'] )) {

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
                  title: '<?=  $_SESSION ['clint_added']?>'
                })
            </script> 
              
        <?php
            }

        ?>
  
    <?php
    if (isset( $_SESSION ['clint_deleted'] )) {

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
                  title: '<?=  $_SESSION ['clint_deleted']?>'
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