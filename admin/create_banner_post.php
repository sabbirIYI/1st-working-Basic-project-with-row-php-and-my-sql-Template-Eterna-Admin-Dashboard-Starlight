<?php
    session_start();
    require_once 'inc/db.php';

    $banner_title = $_POST['banner_title'];
    $banner_details = $_POST['banner_details'];
    $uploaded_file_name = $_FILES['banner_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['banner_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/slide/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
    if (!$banner_title) {
       $_SESSION ['banner_title_error'] = "Please Enter Your banner title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_banner_title'] = $banner_title ;
    }
    if (!$banner_details) {
        $_SESSION ['banner_details_error'] = "Please Enter Your banner details";
        $not_error = false;

     }else{
         $_SESSION ['old_banner_details'] = $banner_details ;
     }
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose banner photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO banner (banner_title, banner_details, img_location) VALUES ('$banner_title', '$banner_details', '$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['banner_added'] = "Banner Added Successfully";
        header('location: edit_banner.php');
       
      }else{
         header('location: create_banner.php');
      }
   



?>
   