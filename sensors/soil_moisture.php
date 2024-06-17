<?php

include("admin/config/conn.php");
 
  $sql = "SELECT soil_moisture, date FROM t_sensors";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
      $soil_moisture[]=$row['soil_moisture'];
      $date[] = $row['date'];
    }
  } else {
    echo "0 results";
  }
  
?>