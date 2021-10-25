<?php
  require_once 'inc/d_header.php';
  
  $id = $_GET['id'];

?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Create Your Offer </h6>
              <p class="mg-b-20 mg-sm-b-30">You will add new Offer here </p>
              <form action="offer_update_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Offer Category" name="category" value ="<?=(isset($_SESSION['old_category'])) ? $_SESSION['old_category']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['category_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['category_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Price" name="price" value ="<?=(isset($_SESSION['old_price'])) ? $_SESSION['old_price']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['price_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['price_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Duration: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Duration" name="duration" value ="<?=(isset($_SESSION['old_duration'])) ? $_SESSION['old_duration']:"" ?>">
                    <?php
                        if (isset( $_SESSION ['duration_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['duration_error']?></small>
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
