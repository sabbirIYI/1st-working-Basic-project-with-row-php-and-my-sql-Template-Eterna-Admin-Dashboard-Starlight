<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_POST['id'];
    $skill_title = $_POST['skill_title'];
    $skill_progress = $_POST['skill_progress'];
    

    $not_error = true;
    if (!$skill_title) {
       $_SESSION ['skill_title_error'] = "Please Enter Your skill title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_skill_title'] = $skill_title ;
    }
    if (!$skill_progress) {
        $_SESSION ['skill_progress_error'] = "Please Enter Your skill progress";
        $not_error = false;

     }else{
         $_SESSION ['old_skill_progress'] = $skill_progress ;
     }
     if ($not_error) { 
      
        $Update_query = "UPDATE skill_progress SET skill_title ='$skill_title', skill_progress ='$skill_progress' WHERE id ='$id '";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['skill_progress_updated'] = "Skill Progressbar Updated Successfully";
        header('location: edit_skill.php');
      }else{
         header('location: skill_progress_edit_progress.php');
      }
   



?>
   