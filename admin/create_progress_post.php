<?php
    session_start();
    require_once 'inc/db.php';

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
      
        $insert_query = "INSERT INTO skill_progress (skill_title, skill_progress) VALUES ('$skill_title', '$skill_progress')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['skill_added'] = "Skill Added Successfully";
        header('location: edit_skill.php');
       
      }else{
         header('location: create_progress.php');
      }
   



?>
   