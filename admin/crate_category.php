<?php
  require_once 'inc/d_header.php';
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your Portfolio Category</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new  Portfolio Category here</p>
              <form action="create_category_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your category" name="category">
                    <?php
                        if (isset( $_SESSION ['category_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['category_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
               
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-10 btn-center">Submit</button>
                </div><!-- form-layout-footer -->
               </form>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
        
<?php
  require_once 'inc/d_footer.php';
 

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


  session_unset();
?> 
