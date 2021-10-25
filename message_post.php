<?php
    session_start();
    require_once 'admin/inc/db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $not_error = true;
    if (!$name) {
       $_SESSION ['name_error'] = "Please Enter Your name";
       $not_error = false;
       
    }else{
        $_SESSION ['old_name'] = $name ;
    }
    if (!$email) {
        $_SESSION ['email_error'] = "Please Enter Your email";
        $not_error = false;
        
     }else{
         $_SESSION ['old_email'] = $email ;
     }
     if (!$subject) {
        $_SESSION ['subject_error'] = "Please Enter Your subject";
        $not_error = false;
        
     }else{
         $_SESSION ['old_subject'] = $subject ;
     }
     if (!$message) {
        $_SESSION ['message_error'] = "Please Enter Your message";
        $not_error = false;
        
     }else{
         $_SESSION ['old_message'] = $message ;
     }
     if ($not_error) {
         $insert_query = " INSERT INTO messages (name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message') ";
         mysqli_query(connect_database(),  $insert_query);
        
         $_SESSION['message_send'] = "Thanks for send me your message";
         header('location: contact.php');
     }else{
         header('location: contact.php');
     }
?>