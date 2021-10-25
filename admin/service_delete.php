<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];

    $delete_query = "DELETE FROM services WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['service_deleted'] = "service Deleted Successfully";
    header('location: edit_service.php');
?>