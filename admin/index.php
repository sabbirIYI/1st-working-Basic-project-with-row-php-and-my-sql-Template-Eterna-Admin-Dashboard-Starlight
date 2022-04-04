<?php
  require_once 'inc/d_header.php';
?>
       
        
        <!-- row -->

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
       

<?php
  require_once 'inc/d_footer.php';
?>     