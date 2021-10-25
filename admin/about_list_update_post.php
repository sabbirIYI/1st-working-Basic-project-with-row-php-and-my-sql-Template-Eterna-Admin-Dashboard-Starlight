<?php
    session_start();
    require_once 'inc/db.php';
    
    $id = $_POST['id'];
    $about_first_list = $_POST['about_first_list'];
    $about_second_list = $_POST['about_second_list'];
    $about_third_list = $_POST['about_third_list'];
    $about_last_list = $_POST['about_last_list'];
   
    $not_error = true;
    if (!$about_first_list) {
       $_SESSION ['about_first_list_error'] = "Please Enter Your First Item";
       $not_error = false;
       
    }else{
        $_SESSION ['old_about_first_list'] = $about_first_list ;
    }
    if (!$about_second_list) {
        $_SESSION ['about_second_list_error'] = "Please Enter Your Second Item";
        $not_error = false;

     }else{
         $_SESSION ['old_about_second_list'] = $about_second_list ;
     }
     if (!$about_third_list) {
        $_SESSION ['about_third_list_error'] = "Please Enter choose Third Item";
        $not_error = false;

     }else{
        $_SESSION ['old_about_third_list'] = $about_third_list ;
    }
     if (!$about_last_list) {
        $_SESSION ['about_last_list_error'] = "Please Enter Your Last Item";
        $not_error = false;

     }else{
         $_SESSION ['old_about_last_list'] = $about_last_list ;
     }

     if ($not_error) { 

        $Update_query = "UPDATE about_list SET about_first_list ='$about_first_list', about_second_list ='$about_second_list', about_third_list ='$about_third_list',about_last_list ='$about_last_list' WHERE id = 1 ";
        mysqli_query(connect_database(),  $Update_query);
        $_SESSION ['about_list_updated'] = "About List Updated Successfully";
        header('location: edit_about_list.php');
       
      }else{
         header('location: about_list_update.php');
      }
   



?>
   