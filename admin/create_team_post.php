<?php
    session_start();
    require_once 'inc/db.php';

    $member_name = $_POST['member_name'];
    $job_position = $_POST['job_position'];
    $short_details = $_POST['short_details'];
    $uploaded_file_name = $_FILES['member_photo']['name'];
    $uploaded_file_temporary_location = $_FILES['member_photo']['tmp_name'];
    $after_explode_uploaded_file_name = explode('.', $uploaded_file_name);
    $uploaded_file_extension = end($after_explode_uploaded_file_name);
    $img_folder_location = "assets/img/team/".time()."-".rand(10000, 999999).".".$uploaded_file_extension;
    $new_location = $_SERVER['DOCUMENT_ROOT']."/project1_eterna/".$img_folder_location;

    $not_error = true;
    if (!$member_name) {
       $_SESSION ['member_name_error'] = "Please Enter Your member name";
       $not_error = false;
       
    }else{
        $_SESSION ['old_member_name'] = $member_name ;
    }
    if (!$job_position) {
        $_SESSION ['job_position_error'] = "Please Enter Your job position";
        $not_error = false;

     }else{
         $_SESSION ['old_job_position'] = $job_position ;
     }
     if (!$short_details) {
        $_SESSION ['short_details_error'] = "Please Enter Your short details";
        $not_error = false;

     }else{
         $_SESSION ['old_short_details'] = $short_details ;
     }
     if (!$uploaded_file_name) {
        $_SESSION ['uploaded_file_name_error'] = "Please Enter choose banner photo";
        $not_error = false;

     }

     if ($not_error) { 
        move_uploaded_file($uploaded_file_temporary_location, $new_location );
        $insert_query = "INSERT INTO team (member_name, job_position,short_details, img_location) VALUES ('$member_name', '$job_position','$short_details', '$img_folder_location')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['team_added'] = "Team Added Successfully";
        header('location: edit_team.php');
       
      }else{
         header('location: crate_team.php');
      }
   



?>
   