<?php
    session_start();
    require_once 'inc/db.php';
    $category = $_POST['category'];
    $category_as_variable = explode(" ",$category)[0]."_".explode(" ",$category)[1];
    $not_error = true;
    if (!$category) {
       $_SESSION ['category_error'] = "Please Enter Your card title";
       $not_error = false;
       
    }
     if ($not_error) { 
        $insert_query = "INSERT INTO category (category, category_as_variable) VALUES ('$category', '$category_as_variable')";
        mysqli_query(connect_database(),  $insert_query);

        $_SESSION ['category_added'] = "Category Added Successfully";
        header('location: edit_category.php');
       
      }else{
         header('location: create_category.php');
      }
   
?>