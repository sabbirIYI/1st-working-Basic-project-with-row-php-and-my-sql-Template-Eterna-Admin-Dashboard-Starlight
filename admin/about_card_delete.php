<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];

    $delete_query = "DELETE FROM clint_cards WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['card_deleted'] = "card Deleted Successfully";
    header('location: edit_about_card.php');
?>