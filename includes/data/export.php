<?php 
  
  //Header for Download
  include_once("admin/config/conn.php");
   $sqlQuery = "SELECT id, temperature, humidity, heat, soil_moisture, date FROM t_sensors";
   $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
   $sensorsData = array();
   while( $sensors = mysqli_fetch_assoc($resultSet) ) {
	  $sensorsData[] = $sensors;
  }

  
  if(isset($_POST["dataExport"])) {	
    $fileName = "sensors_data_".date('Ymd') . ".xls";			
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fileName\"");	
    $showColoumn = false;
    if(!empty($sensorsData)) {
      foreach($sensorsData as $data) {
      if(!$showColoumn) {		 
        echo implode("\t", array_keys($data)) . "\n";
        $showColoumn = true;
      }
      echo implode("\t", array_values($data)) . "\n";
      }
    }
    exit;  
  }





?>