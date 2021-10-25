<?php
    require_once 'inc/header.php';
?>
     <!-- ======= Breadcrumbs ======= -->
     <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>Services</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <?php
          database('services');
        ?>
        <div class="row">
          <?php
            foreach (database('services') as $single_services) {
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon fa-3x"><i class="<?=$single_services['service_icon']?>"></i></div>
                <h4><a href=""><?=$single_services['service_title']?></a></h4>
                <p><p><p><span style="font-family: "Open Sans", sans-serif; font-size: 14px; text-align: center;"><font color="#000000"><?=$single_services['service_details']?></font></span><br></p></p></p>
              </div>
            </div>
          <?php
            }
          ?>
          
        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Our Skills Section ======= -->
     <section id="skills" class="skills">
      <div class="container">
            <?php
              $single_details = mysqli_fetch_assoc(database('service_skill_details'));
            
            ?>
        <div class="section-title">
          <h2>Our Skills</h2>
          <p><?= $single_details['skill_details']?></p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/skills-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><?= $single_details['skill_title']?><</h3>
            <p class="fst-italic">
            <?= $single_details['skill_sub_details']?>
            </p>

            <div class="skills-content">

            <?php
              foreach (database('skill_progress') as $single_progress) {
              ?>
              <div class="progress">
                <span class="skill"><?= $single_progress['skill_title']?> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $single_progress['skill_progress']?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <?php
              }
            ?>
            

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Our Skills Section -->
<?php
    require_once 'inc/footer.php';
?>