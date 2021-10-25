<?php
    session_start();
    require_once 'inc/db.php';
    
    $id = $_POST['id'];
    $service_title = $_POST['service_title'];
    $service_details = $_POST['service_details'];
    $service_icon = $_POST['service_icon'];
   
    $not_error = true;
    if (!$service_title) {
       $_SESSION ['service_title_error'] = "Please Enter Your service title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_service_title'] = $service_title ;
    }
    if (!$service_details) {
        $_SESSION ['service_details_error'] = "Please Enter Your service details";
        $not_error = false;

     }else{
         $_SESSION ['old_service_details'] = $service_details ;
     }
     if (!$service_icon) {
        $_SESSION ['service_icon_error'] = "Please Enter choose service photo";
        $not_error = false;

     }

     if ($not_error) { 
        $Update_query = "UPDATE service SET service_title ='$service_title', service_details ='$service_details', service_icon = '$service_icon' WHERE id ='$id '";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['service_updated'] = "service Updated Successfully";
        header('location: edit_service.php');
       
      }else{
         header('location: service_update.php');
      }
   



?>
   