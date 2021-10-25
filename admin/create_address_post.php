<?php
session_start();
require_once 'inc/db.php';


  $address= $_POST['address'];
  $email= $_POST['email'];
  $phone_number= $_POST['phone_number'];
  $ifrem_link= $_POST['ifrem_link'];

    $not_error = true;
    if (!$address) {
       $_SESSION ['address_error'] = "Please Enter Your Address";
       $not_error = false;
       
    }
    if (!$email) {
        $_SESSION ['about_details_error'] = "Please Enter Your Email";
        $email = false;

     }
     if (!$phone_number) {
        $_SESSION ['phone_number_error'] = "Please Enter Phone Number";
        $not_error = false;

     }
     if (!$ifrem_link) {
        $_SESSION ['ifrem_link_error'] = "Please Enter Your address ifrem link";
        $not_error = false;

     }

     if ($not_error) { 
        $Update_query = "UPDATE contact SET address ='$address', email ='$email', phone_number = '$phone_number', ifrem_link ='$ifrem_link' WHERE id = 1";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['contact_updated'] = "Contact Updated Successfully";
        header('location: edit_contact.php');
       
      }else{
         header('location: create_contact.php');
      }
   
?>
