<?php
  require_once 'inc/d_header.php';
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your Skill Progress</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new skill progress here</p>
              <form action="create_progress_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">Skill Title: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Skill Title" name="skill_title" value ="<?=(isset($_SESSION['old_skill_title'])) ? $_SESSION['old_skill_title']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['skill_title_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['skill_title_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Skill Progress: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input class="range form-control" type="range" min="0" max="100" value="10" step="1" onmousemove="rangevalue1.value=value" name="skill_progress"/>
                    <output id="rangevalue1"></output>
                    <!-- <input type="range" class="form-control" placeholder="Write Your Banner Details" name="skill_progress" value ="<?=(isset($_SESSION['old_skill_progress'])) ? $_SESSION['old_skill_progress']:"" ?>"> -->
                    <?php
                        if (isset( $_SESSION ['skill_progress_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['skill_progress_error']?></small>
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
?>
<?php

  if (isset( $_SESSION ['skill_added'] )) {

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
            title: '<?=  $_SESSION ['skill_added']?>'
          })
      </script> 
        

      <script>
      
          
    <?php
    }
?>
<?php

  session_unset();
?> 
