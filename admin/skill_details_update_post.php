<?php
    session_start();
    require_once 'inc/db.php';
    
    $skill_details = $_POST['skill_details'];
    $skill_title = $_POST['skill_title'];
    $skill_sub_details = $_POST['skill_sub_details'];
    $not_error = true;
    if (!$skill_details) {
       $_SESSION ['skill_details_error'] = "Please Enter Your skill details";
       $not_error = false;
       
    }else{
        $_SESSION ['old_skill_details'] = $skill_details ;
    }
    if (!$skill_title) {
        $_SESSION ['skill_title_error'] = "Please Enter Your skill title";
        $not_error = false;

     }else{
         $_SESSION ['old_skill_title'] = $skill_title ;
     }
     if (!$skill_sub_details) {
        $_SESSION ['skill_sub_details_error'] = "Please Enter skill_sub_details";
        $not_error = false;

     }else{
        $_SESSION ['old_skill_sub_details'] = $skill_sub_details ;
    }
     
     if ($not_error) { 

        $Update_query = "UPDATE service_skill_details SET skill_details ='$skill_details', skill_title ='$skill_title', skill_sub_details ='$skill_sub_details' WHERE id = 1 ";
        mysqli_query(connect_database(),  $Update_query);
        $_SESSION ['skill_details_list_updated'] = "Skill Details List Updated Successfully";
        header('location: edit_skill_details.php');
       
      }else{
         header('location: add_skill_details.php');
      }
   



?>
   