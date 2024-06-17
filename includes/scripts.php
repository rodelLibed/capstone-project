
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./javascript/index.js"></script>
    
    <!--Graph Function-->
    <script>
        //for temperature
        const ctx = document.getElementById("myChart").getContext('2d');
     const myChart = new Chart(ctx, {
       type: 'line',
       data: {
        labels: <?php 
           
            echo json_encode($date);?>,
        
         datasets: [{
          label: "TEMPERATURE",
           backgroundcolor:[
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
           ], 
           borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
           data: <?php echo json_encode($temperature); ?>,
           
           borderWidth: 3,
         }]
       },
       option: {
        
        scales: {
         
            y: {
                display: true
            }
        }
       }
     })
     //For Humidity
     const ctx2 = document.getElementById("Chart").getContext('2d');
     const myChart2 = new Chart(ctx2, {
       type: 'line',
       data: {
        labels: <?php echo json_encode($date);?>,
        
         datasets: [{
          label: "HUMIDITY",
           backgroundcolor:[
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
           ], 
           borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
           data: <?php echo json_encode($humidity); ?>,
           
           borderWidth: 3,
         }]
       },
       option: {
        
        scales: {
         
            y: {
                display: true
            }
        }
       }
     })
     //For Heat Index
     const ctx3 = document.getElementById("Chart3").getContext('2d');
     const myChart3 = new Chart(ctx3, {
       type: 'line',
       data: {
        labels: <?php echo json_encode($date);?>,
        
         datasets: [{
          label: "Heat Index",
           backgroundcolor:[
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
           ], 
           borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
           data: <?php echo json_encode($heat); ?>,
           
           borderWidth: 3,
         }]
       },
       option: {
        
        scales: {
         
            y: {
                display: true
            }
        }
       }
     })
     //for Soil Moisture
     const ctx4 = document.getElementById("Chart4").getContext('2d');
     const myChart4 = new Chart(ctx4, {
       type: 'line',
       data: {
        labels: <?php echo json_encode($date)?>,
        
         datasets: [{
          label: "SOIL MOISTURE",
           backgroundcolor:[
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
           ], 
           borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
           data: <?php echo json_encode($soil_moisture)?>,
           
           borderWidth: 3,
         }]
       },
       option: {
        
        scales: {
         
            y: {
                display: true
            }
        }
       }
     })
    </script>
</body>

</html>