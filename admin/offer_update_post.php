<?php
    session_start();
    require_once 'inc/db.php';
    
    $category = $_POST['category'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
   
    $not_error = true;
    if (!$category) {
       $_SESSION ['category_error'] = "Please Enter Your First Item";
       $not_error = false;
       
    }else{
        $_SESSION ['old_category'] = $category ;
    }
    if (!$price) {
        $_SESSION ['price_error'] = "Please Enter Your Second Item";
        $not_error = false;

     }else{
         $_SESSION ['old_price'] = $price ;
     }
     if (!$duration) {
        $_SESSION ['duration_error'] = "Please Enter choose Third Item";
        $not_error = false;

     }else{
        $_SESSION ['old_duration'] = $duration ;
    }
     
     if ($not_error) { 

        $insert_query = "INSERT INTO price (category, price, duration) VALUES ('$category', '$price', '$duration')";
        mysqli_query(connect_database(),  $insert_query);
        $_SESSION ['price_added'] = "Price Added Successfully";
        header('location: edit_price.php');
       
      }else{
         header('location: crate_price.php');
      }
   



?>
   