 <?php
    require_once 'inc/header.php';
 ?>
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Team</li>
        </ol>
        <h2>Team</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <?php
            foreach (database('team') as $single_team_member) {
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= $single_team_member['img_location']?>" alt="">
              <h4><?= $single_team_member['member_name']?></h4>
              <span><?= $single_team_member['job_position']?></span>
              <p>
              <?= $single_team_member['short_details']?>
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->

<?php
    require_once 'inc/footer.php';
 ?>