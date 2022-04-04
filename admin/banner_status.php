<?php
    require_once 'inc/db.php';
    $id = $_GET['id'];
    $deactivate_all_query = "UPDATE banner SET banner_status = 'deactivate'";
    mysqli_query(connect_database(), $deactivate_all_query);
    $active_query = "UPDATE banner SET banner_status = 'active' WHERE id = '$id'";
    mysqli_query(connect_database(), $active_query);
    header('location: edit_banner.php');
?>