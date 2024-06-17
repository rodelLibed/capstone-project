<?php
include("admin/config/conn.php");


$sql = "INSERT INTO t_sensors (temperature, humidity, heat, soil_moisture)
    VALUES ('".$_REQUEST['sensor_humid']."', 
    '".$_REQUEST['sensor_temp']."', '".$_REQUEST['sensor_heat']."',
     '".$_REQUEST['sensor_moisture']."')";

    

if (mysqli_query($conn, $sql)) { 
  

  echo "Successfully Saved";


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>