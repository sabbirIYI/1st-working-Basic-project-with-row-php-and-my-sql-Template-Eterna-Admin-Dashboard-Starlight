<?php
  require_once 'inc/d_header.php';
  $id = $_GET['id'];
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your Team Member</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new team member</p>
              <form action="team_update_post.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <label class="col-sm-4 form-control-label">Member Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" name="id" value="<?= $id?>" hidden>
                    <input type="text" class="form-control" placeholder="Write Your member name" name="member_name" value ="<?=(isset($_SESSION['old_member_name'])) ? $_SESSION['old_member_name']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['member_name_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['member_name_error']?></small>
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
                    <label class="col-sm-4 form-control-label">Short Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your short Details" name="short_details" value ="<?=(isset($_SESSION['old_short_details'])) ? $_SESSION['old_short_details']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['short_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['short_details_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Member Photo: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" class="form-control" name="member_photo">
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
 

  session_unset();
?> 
