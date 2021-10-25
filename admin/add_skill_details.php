<?php
  require_once 'inc/d_header.php';
  
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Update Your Skills Details</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new skill details</p>
              <form action="skill_details_update_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">Skill Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea  cols="30" rows="10" type="text" class="form-control" placeholder="Write Your skill details" name="skill_details" value ="<?=(isset($_SESSION['old_skill_details'])) ? $_SESSION['old_skill_details']:"" ?>"></textarea>
                    <?php
                        if (isset( $_SESSION ['skill_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['skill_details_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Skill Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your skill title" name="skill_title" value ="<?=(isset($_SESSION['old_skill_title'])) ? $_SESSION['old_skill_title']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['skill_title_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['skill_title_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Skill Sub-Details: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea name="skill_sub_details" id="" cols="30" rows="10" type="text" class="form-control" placeholder="Write Your Skill Sub-Details" value ="<?=(isset($_SESSION['old_skill_sub_details'])) ? $_SESSION['old_skill_sub_details']:"" ?>"></textarea>
                    <?php
                        if (isset( $_SESSION ['skill_sub_details_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['skill_sub_details_error']?></small>
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
