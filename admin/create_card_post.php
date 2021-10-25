<?php
    session_start();
    require_once 'inc/db.php';

    $card_title = $_POST['card_title'];
    $card_details = $_POST['card_details'];
    $card_icon = $_POST['card_icon'];
    
    $not_error = true;
    if (!$card_title) {
       $_SESSION ['card_title_error'] = "Please Enter Your card title";
       $not_error = false;
       
    }else{
        $_SESSION ['old_card_title'] = $card_title ;
    }
    if (!$card_details) {
        $_SESSION ['card_details_error'] = "Please Enter Your card details";
        $not_error = false;

     }else{
         $_SESSION ['old_card_details'] = $card_details ;
     }
     if (!$card_icon) {
        $_SESSION ['card_icon_error'] = "Please Enter choose card icon";
        $not_error = false;

     }

     if ($not_error) { 
        $insert_query = "INSERT INTO card (card_title, card_details, card_icon) VALUES ('$card_title', '$card_details', '$card_icon')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['card_added'] = "card Added Successfully";
        header('location: edit_card.php');
       
      }else{
         header('location: create_card.php');
      }
   



?>
   