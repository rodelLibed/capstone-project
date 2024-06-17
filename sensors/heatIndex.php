<?php

include("admin/config/conn.php");


  $sql = "SELECT heat, date FROM t_sensors";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
   
      $heat[]=$row['heat'];
      $date[] = $row['date'];
    }
  } else {
    echo "0 results";
  }
  
?>