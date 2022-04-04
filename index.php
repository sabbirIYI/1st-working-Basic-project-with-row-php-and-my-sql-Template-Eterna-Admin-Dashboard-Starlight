<?php
  require_once 'inc/header.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          
        <?php
         foreach (database('banner') as $single_banner) {
        
          ?>
             <!-- Slide 1 -->
          <div class="carousel-item <?php echo $single_banner['banner_status']?>" style="background: url(<?= $single_banner['img_location']?>)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><?= $single_banner['banner_title']?> <span>Eterna</span></h2>
                <p class="animate__animated animate__fadeInUp"><?= $single_banner['banner_details']?></p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <?php
         }
          
        ?>
         
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
        <div class="row">
          <?php
            foreach (database_with_limit('card','3') as $key => $single_card) {
          ?>
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="<?= $single_card['card_icon']?> mb-5"></i>
              <h3><a href=""> <?= $single_card['card_title']?></a></h3>
              <p><p><p><span style="font-family: "Open Sans", sans-serif; font-size: 14px; text-align: center;"><font color="#000000"><?= $single_card['card_details']?></font></span><br></p></p></p>
            </div>
          </div>
          <?php
            }
          ?> 
        </div>
      </div>
    </section><!-- End Featured Section -->

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

  </main><!-- End #main -->
<?php
  require_once 'inc/footer.php';
?>