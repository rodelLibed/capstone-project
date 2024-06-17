<?php
    
    @session_start();
    include('admin/config/conn.php');
    include('auth.php');

   require "./sensors/temperature.php";
   require "./sensors/humidity.php";
   require "./sensors/heatIndex.php";
   require "./sensors/soil_moisture.php"; 
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>User Panel</title>
</head>
<body>

   <?php
     
     include('sidebar.php');

   ?>


