<?php

    @session_start();
    
    include('admin/config/conn.php');
    
    if(!isset($_SESSION['auth'])){

     
        header("Location: login");
        exit(0);
       
        
    }
    else{
       if($_SESSION['auth_role'] !="0"){
       
        header("Location: login");
        exit(0);
           
       }
    }

?>