<h1>Directors Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
<?php
while ($director=$directors->fetch_assoc()){
  echo "'" . $director ['director_fname'] . "',";
}
?>
      ],
      datasets: [{
        label: '# of Movies Directed',
        data: [
<?php
$directors=selectDirectors();
while ($director=$directors->fetch_assoc()){
  echo $director ['num_movies'] . ", ";
}
?>
],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
