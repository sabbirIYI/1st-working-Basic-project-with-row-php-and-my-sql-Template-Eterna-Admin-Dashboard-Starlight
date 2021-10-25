<?php
  require_once 'inc/d_header.php';
?>
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$850</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$4,625</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$11,908</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <!-- mini over vew start here-->


            <div class="container-fluid mt-4">
            <!-- Content Row -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_banner.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Banner</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_banner FROM banner";
                                               $total_banner = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"> <?=mysqli_fetch_assoc( $total_banner)['total_banner']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-pager fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_card.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Card</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_card FROM card";
                                               $total_card = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_card)['total_card']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_service.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Services
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_service FROM services";
                                               $total_service = mysqli_query(connect_database(),$count_query);
                                            ?>
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_service)['total_service']?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hand-holding-medical fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_clint.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Clients</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_client FROM clints";
                                               $total_client = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_client)['total_client']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-copyright fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a style="text-decoration: none;" href="subscriber.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Subscribers</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_subscriber FROM subscriber";
                                               $total_subscriber = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_subscriber)['total_subscriber']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bell fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_card.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Card</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_card FROM card";
                                               $total_card = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_card)['total_card']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_testimonial.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Testimonials
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_testimonial FROM testimonial";
                                               $total_testimonial = mysqli_query(connect_database(),$count_query);
                                            ?>
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_testimonial)['total_testimonial']?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-edit fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_skill.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Skills</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_skill FROM skill_progress";
                                               $total_skill = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_skill)['total_skill']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a style="text-decoration: none;" href="view_port_image.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Portfolio</div>

                                        <div class="h5 mb-0 font-weight-bold text-gray-800">9</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-images fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_team.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Team Member</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_team_member FROM team";
                                               $total_team_member = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_team_member)['total_team_member']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <a style="text-decoration: none;" href="edit_price.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Offer
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_offer FROM price";
                                               $total_offer = mysqli_query(connect_database(),$count_query);
                                            ?>
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_offer)['total_offer']?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-blog fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <a style="text-decoration: none;" href="message.php">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Message</div>
                                            <?php
                                               $count_query = "SELECT COUNT(*) AS total_message FROM messages";
                                               $total_message = mysqli_query(connect_database(),$count_query);
                                            ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=mysqli_fetch_assoc( $total_message)['total_message']?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- mini over vew Stop here-->
        <div class="row row-sm mg-t-20">
          <div class="col-xl-8">
            <div class="card overflow-hidden">
              <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                <div class="mg-b-20 mg-sm-b-0">
                  <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile Statistics</h6>
                  <span class="d-block tx-12">October 23, 2017</span>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="#" class="btn btn-secondary tx-12 active">Today</a>
                  <a href="#" class="btn btn-secondary tx-12">This Week</a>
                  <a href="#" class="btn btn-secondary tx-12">This Month</a>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-0 bd-color-gray-lighter">
                <div class="row no-gutters tx-center">
                  <div class="col-12 col-sm-4 pd-y-20 tx-left">
                    <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                  </div><!-- col-4 -->
                  <div class="col-6 col-sm-2 pd-y-20">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
                  </div><!-- col-2 -->
                </div><!-- row -->
              </div><!-- card-body -->
              <div class="card-body pd-0">
                <div id="rickshaw2" class="wd-100p ht-200"></div>
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card pd-20 pd-sm-25 mg-t-20">
              <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar4" height="300"></canvas>
            </div><!-- card -->

          </div><!-- col-8 -->
          <div class="col-xl-4 mg-t-20 mg-xl-t-0">

            <div class="card pd-20 pd-sm-25">
              <h6 class="card-body-title">Pie Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
              <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->

            <div class="card widget-messages mg-t-20">
              <div class="card-header">
                <span>Messages</span>
                <a href=""><i class="icon ion-more"></i></a>
              </div><!-- card-header -->
              <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action media">
                  <img src=" img/img10.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Mienard B. Lumaad</span>
                      <span>4:09am</span>
                    </div>
                    <p class="msg-summary">Many desktop publishing packages and web page editors now use...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src=" img/img9.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Isidore Dilao</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">On the other hand, we denounce with righteous indignation and dislike...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src=" img/img8.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Kirby Avendula</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">It is a long established fact that a reader will be distracted by the readable...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src=" img/img7.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Roven Galeon</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">Than the fact that climate change may be causing it to rapidly disappear... </p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
              </div><!-- list-group -->
              <div class="card-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

<?php
  require_once 'inc/d_footer.php';
?>     