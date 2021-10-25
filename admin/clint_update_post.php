<?php
    session_start();
    require_once 'inc/db.php';
    
    
    $clint_discription = $_POST['clint_discription'];
   
    $not_error = true;
    if (!$clint_discription) {
       $_SESSION ['clint_discription_error'] = "Please Enter Your Clint Description";
       $not_error = false;
       
    }
    
     if ($not_error) { 
        $Update_query = "UPDATE client_discription SET clint_discription ='$clint_discription' WHERE id = 1";
        mysqli_query(connect_database(),  $Update_query);

        $_SESSION ['clint_dicsription_updated'] = "Clint Description Updated Successfully";
        header('location: edit_clint_discription.php');
       
      }else{
         header('location: update_description.php');
      }
   



?>
   