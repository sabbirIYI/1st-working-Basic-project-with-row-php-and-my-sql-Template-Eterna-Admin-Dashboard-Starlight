<?php
  require_once 'inc/d_header.php';
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your About Element</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new element here for your About Section</p>
              <form action="create_about_post.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <label class="col-sm-4 form-control-label">About Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your about Title" name="about_title" value ="<?=(isset($_SESSION['old_about_title'])) ? $_SESSION['old_about_title']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_title_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_title_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">About First Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your about Details" name="about_details" value ="<?=(isset($_SESSION['old_about_details'])) ? $_SESSION['old_about_details']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_details_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">About Photo: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" class="form-control" name="about_photo">
                    <?php
                        if (isset( $_SESSION ['uploaded_file_name_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['uploaded_file_name_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">About End Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your about end details" name="about_end_details" value ="<?=(isset($_SESSION['old_about_end_details'])) ? $_SESSION['old_about_end_details']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_end_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_end_details_error']?></small>
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
