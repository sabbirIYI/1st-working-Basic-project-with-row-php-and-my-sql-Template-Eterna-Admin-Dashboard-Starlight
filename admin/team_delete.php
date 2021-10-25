<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];
    $delete_query = "DELETE FROM team WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['banner_deleted'] = "Team Member Deleted Successfully";
    header('location: edit_team.php');
?>