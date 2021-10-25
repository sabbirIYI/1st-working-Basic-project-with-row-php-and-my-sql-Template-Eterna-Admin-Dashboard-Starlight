<?php
    require_once 'inc/header.php';
    require_once 'admin/inc/db.php';
?>
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
        <h2>Contact</h2>

      </div>
    </section><!-- End Breadcrumbs -->
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?=mysqli_fetch_assoc(database('contact'))['address']?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?=mysqli_fetch_assoc(database('contact'))['email']?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?=mysqli_fetch_assoc(database('contact'))['phone_number']?></p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="<?=mysqli_fetch_assoc(database('contact'))['ifrem_link']?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
           <div class="card">
             <div class="card-body">
             <form action="message_post.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value ="<?=(isset($_SESSION['old_name'])) ? $_SESSION['old_name']:"" ?>" required>
                  <?php
                        if (isset( $_SESSION ['name_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['name_error']?></small>
                        <?php
                        }
                    ?>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value ="<?=(isset($_SESSION['old_email'])) ? $_SESSION['old_email']:"" ?>" required>
                  <?php
                        if (isset( $_SESSION ['email_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['email_error']?></small>
                        <?php
                        }
                    ?>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value ="<?=(isset($_SESSION['old_subject'])) ? $_SESSION['old_subject']:"" ?>"required>
                <?php
                        if (isset( $_SESSION ['subject_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['subject_error']?></small>
                        <?php
                        }
                    ?>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" value ="<?=(isset($_SESSION['old_message'])) ? $_SESSION['old_message']:"" ?>" required></textarea>
                <?php
                        if (isset( $_SESSION ['message_error'])) {
                        ?>
                          <small class="text-danger"><?= $_SESSION ['message_error']?></small>
                        <?php
                        }
                    ?>
                <br/>
              </div>
                 <?php
                  if (isset($_SESSION['message_send'])) {
                  ?>
                    <div class="alert alert_success">
                      <?=$_SESSION['message_send']?>
                    </div>
                  <?php
                  }
                 ?>      
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
             </div>
           </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<?php
    require_once 'inc/footer.php'
?>