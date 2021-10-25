<?php
    session_start();
    require_once '../inc/db.php';

    $name =  $_POST['name'];
    $user_name = $_POST['user_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $not_error = true;
    if (!$name) {
       $_SESSION ['name_error'] = "Please Enter Your Name";
       $not_error = false;
       
    }else{
        $_SESSION ['old_name'] = $name ;
    }
    if (!$user_name) {
        $_SESSION ['user_name_error'] = "Please Enter Your Username";
        $not_error = false;

     }else{
         $_SESSION ['old_user_name'] = $user_name ;
     }
     if (!$phone_number) {
        $_SESSION ['phone_number_error'] = "Please Enter Your Phone Number";
        $not_error = false;

     }else{
         $_SESSION ['old_phone_number'] = $phone_number ;
     }
     if (!$email) {
        $_SESSION ['email_error'] = "Please Enter Your email";
        $not_error = false;

     }else{
         $_SESSION ['old_email'] = $email ;
     }
     if (!$password) {
        $_SESSION ['password_error'] = "Please Enter Your Password";
        $not_error = false;

     }
     if (strlen($password < 6)) {
        $_SESSION ['password_character_error'] = "Your password should me more than 6 character";
        $not_error = false;

     }

     if (!$confirm_password) {
        $_SESSION ['confirm_password_error'] = "Please Enter Your Confirm Password";
        $not_error = false;

     }  

     if ($password == $confirm_password) {
         if ($not_error) { 
           $phone_number_count_query = "SELECT COUNT(*) AS phone_number FROM users WHERE phone_number = '$phone_number'";
           if ( mysqli_fetch_assoc(mysqli_query($db_connect, $phone_number_count_query))['phone_number'] == 0) {
              $email_count_query = "SELECT COUNT(*) AS email FROM users WHERE email = '$email'";
              if (mysqli_fetch_assoc(mysqli_query($db_connect, $email_count_query))['email'] == 0) {
                $insert_query = "INSERT INTO users (name,user_name,phone_number,email,password) VALUES ('$name','$user_name','$phone_number','$email','$password')";
                mysqli_query($db_connect, $insert_query);
     
                $_SESSION ['registration_added'] = "Registration Complect Successfully, Now you can log in";
     
                header('location: login.php');
              }else{
                $_SESSION['email_duplicate_error'] = "This email already in use";

                header('location: Registration.php');
              }
              
           }else{
               $_SESSION['number_duplicate_error'] = "This number already in use";

               header('location: Registration.php');
           }
          
         }else{
            header('location: Registration.php');
         }
     }else{
        
        $_SESSION ['password_matching_error'] = "Your Password and Confirm Not Matching";
        header('location: Registration.php');
     }
     
     
?>