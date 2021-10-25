<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];

    $delete_query = "DELETE FROM clints WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['clint_deleted'] = "Clint Deleted Successfully";
    header('location: edit_clint.php');
?>