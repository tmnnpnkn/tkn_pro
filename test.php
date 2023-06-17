<!-- Template 2098 Health http://www.tooplate.com/view/2098-health -->
<?php
include('php/connectdb.php');

$sql = "SELECT * FROM articles ORDER BY view_count DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

// Create an empty array to store the results
$data = array();

// Fetch the results and add them to the data array
if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) {
          $data[] = array(
               'id' => $row['a_id'],
               'title' => $row['title'],
               'View Count' => $row['view_count']
          );
     }
}

// Convert the data array to JSON
$jsonData = json_encode($data);

// Output the JSON data
// echo $jsonData;

?>

<!-- <script>
    var jsonData = <?php echo $jsonData; ?>;
    console.log(jsonData);
</script> -->

<!DOCTYPE html>
<html>

<head>
     <title>Pie Chart Example</title>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
     <!-- <canvas id="myChart"></canvas> -->
     <canvas id="myChart" width="100%" height="40" style="display: block; box-sizing: border-box; height: 40px; width: 100%;"></canvas>

     <script>
          // Retrieve the JSON data
          var jsonData = <?php echo $jsonData; ?>;

          // Extract the id and view_count values from the JSON
          var ids = jsonData.map(function (item) {
               return item.id;
          });

          var titles = jsonData.map(function (item) {
               return item.title;
          });

          var viewCounts = jsonData.map(function (item) {
               return item['View Count'];
          });

          // Create the pie chart using Chart.js
          var ctx = document.getElementById('myChart').getContext('2d');
          var myChart = new Chart(ctx, {
               type: 'pie',
               data: {
                    labels: titles,
                    datasets: [{
                         label: 'View Count',
                         data: viewCounts,
                         backgroundColor: [
                              'rgba(255, 99, 132, 0.5)',
                              'rgba(54, 162, 235, 0.5)',
                              'rgba(255, 206, 86, 0.5)',
                              'rgba(75, 192, 192, 0.5)',
                              'rgba(153, 102, 255, 0.5)',
                              'rgba(255, 159, 64, 0.5)',
                              'rgba(255, 99, 132, 0.5)'
                         ],
                         borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)',
                              'rgba(255, 99, 132, 1)'
                         ],
                         borderWidth: 1
                    }]
               },
               options: {
                    responsive: true,
                    plugins: {
                         legend: {
                              labels: {
                                   fontSize: 12 // Adjust the font size for the labels
                              }
                         }
                    }
               }
          });
     </script>
</body>

</html>