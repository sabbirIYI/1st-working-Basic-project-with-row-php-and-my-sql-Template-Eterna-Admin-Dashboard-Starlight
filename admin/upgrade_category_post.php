<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_POST['id']; 
    $category = $_POST['category'];
    $category_as_variable = explode(" ",$category)[0]."_".explode(" ",$category)[1];
    echo $category_as_variable;
    
    
    die();
    $not_error = true;
    if (!$category) {
       $_SESSION ['category_error'] = "Please Enter Your card title";
       $not_error = false;
       
    }
     if ($not_error) { 
        $Update_query = "UPDATE category SET category ='$category' category_as_variable = '$category_as_variable' WHERE id = $id";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['edit_category'] = "Category Edited Successfully";
        header('location: edit_category.php');
       
      }else{
        header('location: edit_category_name.php');
      }
   
?>