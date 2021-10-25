<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];
    $delete_query = "DELETE FROM testimonial WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['testimonial_deleted'] = "testimonial Deleted Successfully";
    header('location: edit_testimonial.php');
?>