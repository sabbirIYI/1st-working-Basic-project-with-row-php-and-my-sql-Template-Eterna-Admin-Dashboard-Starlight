<?php
    require_once 'inc/header.php';
    require_once 'admin/inc/db.php';
?>
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>About Us</li>
    </ol>
    <h2>About Us</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">
        <?php
        $single_about_from_db = mysqli_fetch_assoc(database('about'));
         
        ?>
        <div class="row">
          <div class="col-lg-6">
            <img src="<?=  $single_about_from_db['img_location']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><?=  $single_about_from_db['about_title']?></h3>
            <p class="fst-italic">
            <?=  $single_about_from_db['about_details']?>
            </p>
            <?php
              database('about_list');
            ?>
            <ul>
              <?php
                foreach (database('about_list') as $single_list) {
                  
                ?>  
                   <li><i class="bi bi-check-circle"></i> <?= $single_list['about_first_list']?></li>
                   <li><i class="bi bi-check-circle"></i> <?= $single_list['about_second_list']?></li>
                   <li><i class="bi bi-check-circle"></i> <?= $single_list['about_third_list']?></li>
                   <li><i class="bi bi-check-circle"></i> <?= $single_list['about_last_list']?></li>
                <?php
                }
              ?>
             
             
            </ul>
            <p>
            <?=  $single_about_from_db['about_end_details']?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row no-gutters">
    <?php
            foreach (database_with_limit('clint_cards','4') as $key => $single_card) {
            ?>
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                <i class="<?= $single_card['card_icon']?>"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong><?= $single_card['card_title']?></p>
        
                </strong><?= $single_card['card_details']?>
                <a href="#">Find out more &raquo;</a>
                </div>
            </div>
            <?php
            }
          ?>
      
    </div>

  </div>
</section><!-- End Counts Section -->

 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients">
      <div class="container">
          <?php
            database('client_discription');
           
          ?>
        <div class="section-title">
          <h2>Clients</h2>
          <p><?= mysqli_fetch_assoc(database('client_discription'))['clint_discription']?></p>
        </div>

        <div class="clients-slider swiper">
          <?php
            database('clints');
          ?>
          <div class="swiper-wrapper align-items-center">
              <?php
                foreach ( database('clints')as $key => $single_brand) {
                ?>
                  <div class="swiper-slide"><img src="<?=$single_brand['img_location']?>" class="img-fluid" alt=""></div>
                <?php
                }
              ?>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p><?php print_r(mysqli_fetch_assoc(database('testimonial_description'))['testimonial_text']);
      ?></p>
    </div>

    <div class="row">
      <?php
        foreach (database('testimonial') as $single_testimonial) {
        ?>
        <div class="col-lg-6">
          <div class="testimonial-item">
            <img src="<?= $single_testimonial['img_location']?>" class="testimonial-img" alt="">
            <h3><?= $single_testimonial['client_name']?></h3>
            <h4><?= $single_testimonial['job_Position']?></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?= $single_testimonial['testimonial_details']?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
        <?php
        }
      ?>
     
    </div>

  </div>
</section><!-- End Testimonials Section -->

</main><!-- End #main -->
<?php
    require_once 'inc/footer.php'
?>