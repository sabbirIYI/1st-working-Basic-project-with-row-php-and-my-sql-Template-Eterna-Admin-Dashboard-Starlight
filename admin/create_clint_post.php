<?php
    session_start();
    require_once 'inc/db.php';


    $uploaded_file_name = $_FILES['clint_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['clint_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/clients/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose clint photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO clints (img_location) VALUES ('$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['clint_added'] = "clint Added Successfully";
        header('location: edit_clint.php');
       
      }else{
         header('location: add_brand.php');
      }
   



?>
   