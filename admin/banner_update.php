<?php
  require_once 'inc/d_header.php';
  
  $id = $_GET['id'];

?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Update Your Banner Element</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new element here for hour banner</p>
              <form action="banner_uodate_post.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <label class="col-sm-4 form-control-label">Banner Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" value="<?= $id?>" hidden name="id">
                    <input type="text" class="form-control" placeholder="Write Your Banner Title" name="banner_title" value ="<?=(isset($_SESSION['old_banner_title'])) ? $_SESSION['old_banner_title']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['banner_title_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['banner_title_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Banner Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Banner Details" name="banner_details" value ="<?=(isset($_SESSION['old_banner_details'])) ? $_SESSION['old_banner_details']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['banner_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['banner_details_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Banner Photo: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" class="form-control" name="banner_photo">
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
