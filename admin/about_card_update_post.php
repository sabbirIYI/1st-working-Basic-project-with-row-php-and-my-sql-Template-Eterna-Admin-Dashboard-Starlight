<?php
    session_start();
    require_once 'inc/db.php';
    
    $id = $_POST['id'];
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
        $_SESSION ['card_icon_error'] = "Please Enter choose card photo";
        $not_error = false;

     }

     if ($not_error) { 
        $Update_query = "UPDATE clint_cards SET card_title ='$card_title', card_details ='$card_details', card_icon = '$card_icon' WHERE id ='$id '";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['card_updated'] = "card Updated Successfully";
        header('location: edit_about_card.php');
       
      }else{
         header('location: about_card_update.php');
      }
   



?>
   