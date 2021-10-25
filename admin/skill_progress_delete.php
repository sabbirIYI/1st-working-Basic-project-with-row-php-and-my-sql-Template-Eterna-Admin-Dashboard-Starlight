<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];
    $delete_query = "DELETE FROM skill_progress WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['delete_skill'] = "Skill Progressbar Deleted Successfully";
    header('location: edit_skill.php');
?>