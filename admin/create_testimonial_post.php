<?php
    session_start();
    require_once 'inc/db.php';

    $client_name = $_POST['client_name'];
    $job_position = $_POST['job_position'];
    $testimonial_details = $_POST['testimonial_details'];
    $uploaded_file_name = $_FILES['client_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['client_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/testimonials/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
    if (!$client_name) {
       $_SESSION ['client_name_error'] = "Please Enter Your client name";
       $not_error = false;
       
    }else{
        $_SESSION ['old_client_name'] = $client_name ;
    }
    if (!$job_position) {
        $_SESSION ['job_position_error'] = "Please Enter Your job position";
        $not_error = false;

     }else{
         $_SESSION ['old_job_position'] = $job_position ;
     }
     if (!$testimonial_details) {
        $_SESSION ['testimonial_details_error'] = "Please Enter Your testimonial details";
        $not_error = false;

     }else{
         $_SESSION ['old_testimonial_details'] = $testimonial_details ;
     }
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose banner photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO testimonial (client_name, job_Position,testimonial_details, img_location) VALUES ('$client_name', '$job_position','$testimonial_details', '$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['testimonial_added'] = "Testimonial Added Successfully";
        header('location: edit_testimonial.php');
       
      }else{
         header('location: create_testimonial.php');
      }
   



?>
   