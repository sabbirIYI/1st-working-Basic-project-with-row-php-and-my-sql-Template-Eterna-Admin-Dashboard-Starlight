<?php
    session_start();
    require_once 'inc/db.php';

    $portfolio_title = $_POST['portfolio_title'];
    $portfolio_category = $_POST['portfolio_category'];
    $uploaded_file_name = $_FILES['portfolio_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['portfolio_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/portfolio/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
    if (!$portfolio_title) {
       $_SESSION ['portfolio_title_error'] = "Please Enter Your portfolio title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_portfolio_title'] = $portfolio_title ;
    }
    if (!$portfolio_category) {
        $_SESSION ['portfolio_category_error'] = "Please Enter Your portfolio category";
        $not_error = false;

     }else{
         $_SESSION ['old_portfolio_category'] = $portfolio_category ;
     }
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose portfolio photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO portfolio (portfolio_title, portfolio_category, img_location) VALUES ('$portfolio_title', '$portfolio_category', '$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['portfolio_added'] = "portfolio Added Successfully";
        header('location: edit_portfolio.php');
       
      }else{
         header('location: edit_portfolio.php');
      }
   



?>
   