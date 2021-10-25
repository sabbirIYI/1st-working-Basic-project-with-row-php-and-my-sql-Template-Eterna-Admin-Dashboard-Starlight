<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white mt-3 mb-3 ">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>

      <form class="form" action="registration_post.php" method="POST">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your Name" name="name" value ="<?=(isset($_SESSION['old_name'])) ? $_SESSION['old_name']:"" ?>">
          <?php
              if (isset( $_SESSION ['name_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['name_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username" name="user_name" value ="<?=(isset($_SESSION['old_user_name'])) ? $_SESSION['old_user_name']:"" ?>">
          <?php
              if (isset( $_SESSION ['user_name_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['user_name_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your Phone Number " name="phone_number" value ="<?=(isset($_SESSION['old_phone_number'])) ? $_SESSION['old_phone_number']:"" ?>">
          <?php
              if (isset( $_SESSION ['phone_number_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['phone_number_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your Email" name="email" value ="<?=(isset($_SESSION['old_email'])) ? $_SESSION['old_email']:"" ?>">
          <?php
              if (isset( $_SESSION ['email_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['email_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your Password" name="password" >
          <?php
              if (isset( $_SESSION ['password_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['password_error']?></small>
              <?php
              }
          ?>
           <?php
              if (isset( $_SESSION ['password_character_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['password_character_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Confirm your Password" name="confirm_password">
          <?php
              if (isset( $_SESSION ['confirm_password_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['confirm_password_error']?></small>
              <?php
              }
          ?>
           <?php
              if (isset( $_SESSION ['password_matching_error'])) {
              ?>
                <small class="text-danger"><?= $_SESSION ['password_matching_error']?></small>
              <?php
              }
          ?>
        </div><!-- form-group -->
        <?php
              if (isset( $_SESSION ['number_duplicate_error'])) {
              ?>
                <div class="alert alert_info">
                <p class="text-danger"><?= $_SESSION ['number_duplicate_error']?></p>
                </div>
              <?php
              }
          ?>
          <?php
              if (isset( $_SESSION ['email_duplicate_error'])) {
              ?>
                <div class="alert alert_info">
                <p class="text-danger"><?= $_SESSION ['email_duplicate_error']?></p>
                </div>
              <?php
              }
          ?>
        
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Log In</a></div>
      </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>

<?php
   session_unset();
?>
<script>
  Swal.fire({
  position: 'top-end',
  icon: 'success',

  showConfirmButton: false,
  timer: 1500
})
</script>