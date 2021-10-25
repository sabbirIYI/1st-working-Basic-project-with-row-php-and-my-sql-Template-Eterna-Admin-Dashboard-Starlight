<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_POST['id'];
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

        $Update_query = "UPDATE price SET category ='$category', price ='$price', duration ='$duration' WHERE id = '$id' ";
        mysqli_query(connect_database(),  $Update_query);
        $_SESSION ['offer_update'] = "Offer Updated Successfully";
        header('location: edit_price.php');
       
      }else{
         header('location: offer_update.php');
      }
   



?>
   