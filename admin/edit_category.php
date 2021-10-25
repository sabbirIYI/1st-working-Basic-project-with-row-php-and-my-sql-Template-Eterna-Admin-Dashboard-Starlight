<?php
    require_once 'inc/db.php';
    require_once 'inc/d_header.php';
?>
    <div class="car">
        <div class="card_header">
            <h5>Edit Your Category </h5>
            <h6>You can Delete or Edit your category</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse|thead-default">
                    <tr>
                        <th>Sl:</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach (database('category') as $key => $single_category) {
                            ?>
                            <tr>
                                <td scope="row"><?=  $key+1?></td>
                                <td><?= $single_category['category']?></td>
                                <td><a href="edit_category_name.php?id=<?= $single_category['id']?>" class = "btn btn-info btn-sm"> Edit </a></td>
                                <td><a href="delete_category.php?id=<?= $single_category['id']?>" class = "btn btn-danger btn-sm"> Delete </a></td>
                                   
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
    
  if (isset( $_SESSION ['edit_category'] )) {

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
              title: '<?=  $_SESSION ['edit_category']?>'
            })
        </script> 
          
    <?php
    }
  
  session_unset();
?>