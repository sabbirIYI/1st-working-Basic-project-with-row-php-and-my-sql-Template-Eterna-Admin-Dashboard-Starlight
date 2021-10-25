<?php
  require_once 'inc/d_header.php';
  require_once 'inc/db.php';
?>
   
   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Your Address</h6>
              <p class="mg-b-20 mg-sm-b-30">You will add your current address here</p>
              <form action="create_address_post.php" method="POST">
                <div class="row">
                <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Current Address" name="address">
                    <?php
                        if (isset( $_SESSION ['address_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['address_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Email" name="email" ">
                    <?php
                        if (isset( $_SESSION ['email_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['email_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Phone <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Write Your Email" name="phone_number" ">
                    <?php
                        if (isset( $_SESSION ['phone_number_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['phone_number_error']?></small>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Address Link <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Just paste iframe src https link" name="ifrem_link" >
                    <?php
                        if (isset( $_SESSION ['ifrem_link_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['ifrem_link_error']?></small>
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
 

  if (isset( $_SESSION ['address_added'] )) {

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
            title: '<?=  $_SESSION ['address_added']?>'
          })
      </script> 
        
  <?php
  }


  session_unset();
?> 
<script>
    $('.font_awosam').click(function(){
        $('#service_icon_input_filed').val($(this).attr('id'));
    })
</script>
