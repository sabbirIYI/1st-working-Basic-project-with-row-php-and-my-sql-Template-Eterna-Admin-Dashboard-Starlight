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
                    <th>First Item</th>
                    <th>Second Item</th>
                    <th>Third Item</th>
                    <th>Last Item</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('about_list') as $key => $single_about_list) {
                         
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><?= $single_about_list['about_first_list']?></td>
                            <td><?= $single_about_list['about_second_list']?></td>
                            <td><?= $single_about_list['about_third_list']?></td>
                            <td><?= $single_about_list['about_last_list']?></td>
                            <td><a href="about_list_update.php?id=<?= $single_about_list['id']?>" class="btn btn-info btn-sm">Edit</a></td>
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
    if (isset( $_SESSION ['about_list_updated'] )) {

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
                  title: '<?=  $_SESSION ['about_list_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>

<?php
    session_unset();
?>
