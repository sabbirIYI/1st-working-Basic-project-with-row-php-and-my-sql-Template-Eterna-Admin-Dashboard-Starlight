<?php
    require_once 'inc/header.php';
?>
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Pricing</li>
        </ol>
        <h2>Pricing</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row no-gutters">
          <?php
            foreach (database('price') as $single_offer) {
          ?>
              <div class="col-lg-4 box">
            <h3><?= $single_offer['category']?></h3>
            <h4><?= $single_offer['price']?><span><?= $single_offer['duration']?></span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div>

          <?php
            }
          ?>
        
        </div>

      </div>
    </section><!-- End Pricing Section -->
<?php
    require_once 'inc/footer.php';
?>