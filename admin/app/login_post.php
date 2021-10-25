<?php
    session_start();
    require_once '../inc/db.php';

    $email_or_phone_number = $_POST['email_or_phone_number'];
    $password = $_POST['password'];
    
    $not_error = true;
    if (!$email_or_phone_number) {
       $_SESSION ['email_or_phone_number_error'] = "Please Enter Your Email or Phone Number";
       $not_error = false;
       
    }
     if (!$password) {
        $_SESSION ['password_error'] = "Please Enter Your Password";
        $not_error = false;

     }

     if ($not_error) { 
         if (strpos($email_or_phone_number, '@')) {
            $select_email_or_phone_query = "SELECT COUNT(*) AS single_user FROM users WHERE email = '$email_or_phone_number'";
            $select_name_query = "SELECT name FROM users WHERE email ='$email_or_phone_number' AND password ='$password'";
         }else{
            $select_email_or_phone_query = "SELECT COUNT(*) AS single_user FROM users WHERE phone_number ='$email_or_phone_number' AND password ='$password'";
            $select_name_query = "SELECT name FROM users WHERE  phone_number ='$email_or_phone_number' AND password ='$password'";
         }
         $user_from_db = mysqli_query($db_connect, $select_email_or_phone_query);
         if (mysqli_fetch_assoc($user_from_db)['single_user'] == 1) {
            
            $_SESSION[' '] = mysqli_fetch_assoc(mysqli_query($db_connect, $select_name_query))['name'];
            $_SESSION['login_status'] = true;

            header('location:../index.php');
         }else{
             $_SESSION['email_or_password_error'] = "Your email or password is incorrect";
             header('location: login.php'); 
         }
      }else{
         header('location: login.php');
      }
?>