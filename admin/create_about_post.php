<?php
    session_start();
    require_once 'inc/db.php';

    $about_title = $_POST['about_title'];
    $about_details = $_POST['about_details'];
    $about_end_details = $_POST['about_end_details'];
    $uploaded_file_name = $_FILES['about_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['about_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/about/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
    if (!$about_title) {
       $_SESSION ['about_title_error'] = "Please Enter Your about title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_about_title'] = $about_title ;
    }
    if (!$about_details) {
        $_SESSION ['about_details_error'] = "Please Enter Your about details";
        $not_error = false;

     }else{
         $_SESSION ['old_about_details'] = $about_details ;
     }
     if (!$about_end_details) {
        $_SESSION ['about_end_details_error'] = "Please Enter Your about end details";
        $not_error = false;

     }else{
         $_SESSION ['old_about_end_details'] = $about_end_details ;
     }
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose about photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO about (about_title, about_details, about_end_details, img_location) VALUES ('$about_title', '$about_details', '$about_end_details', '$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['about_added'] = "about Added Successfully";
        header('location: edit_about.php');
       
      }else{
         header('location: create_about.php');
      }
   



?>
   