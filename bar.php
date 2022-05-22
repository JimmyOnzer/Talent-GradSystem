 <form>

		<div class="card flex-md-row mb-4 box-shadow h-md-450">
			<div class="card-body d-flex flex-column align-items-start">
<canvas class="my-4 w-1000 chartjs-render-monitor" id="myChart" width="1076" height="400" style="display: block; width: 1076px; height: 400px;"></canvas>

<!-- Graphs -->
    <script src="CollegeStats_files/Chart.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Jobs in Durban", "Jobs in JHB", "Jobs in CPT", "Jobs in Other Cities"],
          datasets: [{
            data: [15, 18, 9, 2],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  
    </div>
</div>
</div>	
</form>