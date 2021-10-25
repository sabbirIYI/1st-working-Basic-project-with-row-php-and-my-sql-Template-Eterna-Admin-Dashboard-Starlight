<?php
  require_once 'inc/d_header.php';
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your Testimonial Element</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new Testimonial</p>
              <form action="create_testimonial_post.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <label class="col-sm-4 form-control-label">Client Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your client name" name="client_name" value ="<?=(isset($_SESSION['old_client_name'])) ? $_SESSION['old_client_name']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['client_name_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['client_name_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Job Position: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Client Job Position" name="job_position" value ="<?=(isset($_SESSION['old_job_position'])) ? $_SESSION['old_job_position']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['job_position_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['job_position_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Testimonial Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your testimonial Details" name="testimonial_details" value ="<?=(isset($_SESSION['old_testimonial_details'])) ? $_SESSION['old_testimonial_details']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['testimonial_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['testimonial_details_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Client Photo: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" class="form-control" name="client_photo">
                    <?php
                        if (isset( $_SESSION ['uploaded_file_name_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['uploaded_file_name_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
               
                <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info mg-r-10 btn-center">Submit</button>
                </div><!-- form-layout-footer -->
               </form>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
        
<?php
  require_once 'inc/d_footer.php';
 

  if (isset( $_SESSION ['testimonial_added'] )) {

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
            title: '<?=  $_SESSION ['testimonial_added']?>'
          })
      </script> 
        
  <?php
  }


  session_unset();
?> 
