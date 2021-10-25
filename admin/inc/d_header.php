<?php

  session_start();
  require_once 'db.php';
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
    <meta name="twitter:image" content="http: themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http: themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http: themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http: themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href=" lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href=" lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href=" lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href=" lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href=" css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="index.php" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="../index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-eye tx-20"></i>
            <span class="menu-item-label">Visit Website</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home tx-22"></i>
            <span class="menu-item-label">Manage Home top</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="create_banner.php" class="nav-link">Create Banner</a></li>
          <li class="nav-item"><a href="edit_banner.php" class="nav-link">View Banner</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-albums-outline tx-22"></i>
            <span class="menu-item-label">Manage Card </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="create_card.php" class="nav-link">Create Card</a></li>
          <li class="nav-item"><a href="edit_card.php" class="nav-link">View card</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-person tx-22"></i>
            <span class="menu-item-label">Manage About </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="edit_about.php" class="nav-link">View About Details</a></li>
          <li class="nav-item"><a href="edit_about_list.php" class="nav-link">View About List</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase tx-22"></i>
            <span class="menu-item-label">Manage Service </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="create_service.php" class="nav-link">Create Service</a></li>
          <li class="nav-item"><a href="edit_service.php" class="nav-link">View  Service</a></li>
          <li class="nav-item"><a href="add_skill_details.php" class="nav-link">Manage  Skill Details</a></li>
          <li class="nav-item"><a href="edit_skill_details.php" class="nav-link">View  Skill Details</a></li>
          <li class="nav-item"><a href="create_progress.php" class="nav-link">Create Progress</a></li>
          <li class="nav-item"><a href="edit_skill.php" class="nav-link">View Progress</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-people tx-22"></i>
            <span class="menu-item-label">Manage Clint </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="update_description.php" class="nav-link">Description</a></li>
          <li class="nav-item"><a href="add_brand.php" class="nav-link">Add Brand</a></li>
          <li class="nav-item"><a href="edit_clint.php" class="nav-link">View Brand</a></li>
        </ul>
        <a href="subscriber.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-checkmark tx-20"></i>
            <span class="menu-item-label">Subscriber</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="message.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-people tx-20"></i>
            <span class="menu-item-label">Message</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-navigate tx-22"></i>
            <span class="menu-item-label">Manage Location </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="create_contact.php" class="nav-link">Add Contact</a></li>
          <li class="nav-item"><a href="edit_contact.php" class="nav-link">View Contact</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-albums-outline tx-22"></i>
            <span class="menu-item-label">Manage About Card </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="create_about_card.php" class="nav-link">Create Card</a></li>
          <li class="nav-item"><a href="edit_about_card.php" class="nav-link">View card</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-body tx-22"></i>
            <span class="menu-item-label">Manage Testimonial </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="update_testimonial.php" class="nav-link">Edit Testimonial Details</a></li>
          <li class="nav-item"><a href="create_testimonial.php" class="nav-link">Add Testimonial</a></li>
          <li class="nav-item"><a href="edit_testimonial.php" class="nav-link">View Testimonial</a></li>
        </ul>
        <!--
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-checkmark tx-22"></i>
            <span class="menu-item-label">Manage Portfolio </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <!-- <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="crate_category.php" class="nav-link">Add Category</a></li>
          <li class="nav-item"><a href="add_portfolio.php" class="nav-link">Add Portfolio</a></li>
          <li class="nav-item"><a href="delete_portfolio.php" class="nav-link">View Portfolio</a></li>
        </ul> -->

        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-people tx-22"></i>
            <span class="menu-item-label">Manage Team </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="crate_team.php" class="nav-link">Add Team Member</a></li>
          <li class="nav-item"><a href="edit_team.php" class="nav-link">View Team Member</a></li>
        </ul>
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-cart tx-22"></i>
            <span class="menu-item-label">Manage Price </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="crate_price.php" class="nav-link">Create Offer </a></li>
          <li class="nav-item"><a href="edit_price.php" class="nav-link">View Offer </a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="page-signin.html" class="nav-link">Login Page</a></li>
          <li class="nav-item"><a href="page-signup.html" class="nav-link">Registration Page</a></li>
          <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?=(isset($_SESSION['login_success'])) ? $_SESSION['login_success']:"" ?></span>
              <img src=" img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="app/login.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
     <!-- ########## START: MAIN PANEL ########## -->
     <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
