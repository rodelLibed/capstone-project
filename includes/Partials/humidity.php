<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>


    <!--Graph Function-->
    <script>
      
      const dates = <?php echo json_encode($date)?>;
      const datapoints = <?php echo json_encode($humidity)?>;
      const convertedDates = dates.map(date => new Date(date).setHours(0,0,0,0))

      const data = {
      labels: dates,
      datasets: [{
        label: 'Humidity',
        data: datapoints,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 3
      }]
    };

    // config 
    const config = {
      type: 'line',
      data,
      options: {
        scales: {
            x:{
                type: 'time',
                time: {
                    unit: 'day'
                },
                
            },
          y: {
            display: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    function filterDate(){
        const start1 = new Date(document.getElementById('start').value);
        const start = start1.setHours(0,0,0,0);
        const end1 = new Date(document.getElementById('end').value);
        const end = end1.setHours(0,0,0,0);

        const filterDates = convertedDates.filter(date => date >= start && date <= end);
        myChart.config.data.labels = filterDates;
        const startArray = convertedDates.indexOf(filterDates[0]);
        const endArray = convertedDates.indexOf(filterDates[filterDates.length -1]);
        const copydatapoints = [...datapoints];
        copydatapoints.splice(endArray + 1, filterDates.length);
        copydatapoints.splice(0, startArray)
        myChart.config.data.datasets[0].data = copydatapoints;
        myChart.update();
      
    }

    function resetDate(){
       myChart.config.data.labels = convertedDates;
       myChart.config.data.datasets[0].data = datapoints;
        myChart.update();
    }

      


    </script>


</body>

</html>

