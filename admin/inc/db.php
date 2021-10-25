<?php

    
    function connect_database(){

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database_name = "project1_eterna";
        return mysqli_connect($hostname, $username, $password, $database_name);
    
    }

    function database($table_name){

        $select_query = "SELECT * FROM $table_name";
        return mysqli_query(connect_database(), $select_query);
    }
    function database_with_limit($table_name, $number_of_row){

        $select_query = "SELECT * FROM $table_name LIMIT $number_of_row";
        return mysqli_query(connect_database(), $select_query);
    }
   