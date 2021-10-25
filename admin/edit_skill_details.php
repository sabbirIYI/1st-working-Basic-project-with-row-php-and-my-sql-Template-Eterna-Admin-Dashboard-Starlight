<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
?>
    <div class="card" style="width:100%;">
        <div class="card-header">
        <h5 class="card-title"> Edit Your Skill Details</h5>
        <h6 class="card-subtitle mb-2 text-muted ">Your Can update your skill details</h6>
        </div>
      <div class="card-body">
        
        <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    
                    <th>Sl:</th>
                    <th>Skill Details</th>
                    <th>Skill Title</th>
                    <th>Skill Sub-Details</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (database('service_skill_details') as $key => $single_service_details) {
                         
                        ?>
                        <tr>
                            <td scope="row"><?= $key+1?></td>
                            <td><?= $single_service_details['skill_details']?></td>
                            <td><?= $single_service_details['skill_title']?></td>
                            <td><?= $single_service_details['skill_sub_details']?></td>
                            <td><a href="add_skill_details.php" class="btn btn-info btn-sm">Edit</a></td>
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
    if (isset( $_SESSION ['skill_details_list_updated'] )) {

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
                  title: '<?=  $_SESSION ['skill_details_list_updated']?>'
                })
            </script> 
              
        <?php
        }
        ?>

<?php
    session_unset();
?>
