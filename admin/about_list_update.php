<?php
  require_once 'inc/d_header.php';
  
  $id = $_GET['id'];

?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Update Your About List</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new element here for Your about section</p>
              <form action="about_list_update_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">First Item: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" value="<?= $id?>" hidden name="id">
                    <input type="text" class="form-control" placeholder="Write Your About First Item" name="about_first_list" value ="<?=(isset($_SESSION['old_about_first_list'])) ? $_SESSION['old_about_first_list']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_first_list_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_first_list_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Second Item: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your About Second Item" name="about_second_list" value ="<?=(isset($_SESSION['old_about_second_list'])) ? $_SESSION['old_about_second_list']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_second_list_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_second_list_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Third Item: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your About Third Item" name="about_third_list" value ="<?=(isset($_SESSION['old_about_third_list'])) ? $_SESSION['old_about_third_list']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_third_list_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_third_list_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Last Item: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your About Last Item" name="about_last_list" value ="<?=(isset($_SESSION['old_about_last_list'])) ? $_SESSION['old_about_last_list']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['about_last_list_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['about_last_list_error']?></small>
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
