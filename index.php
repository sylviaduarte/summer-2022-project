<?php
include ('include/initialize.php');
?>


<html>
<head>
</head>
<body>

  <h1>History</h1>

  <h2>Previous periods:</h2>

      <?php
      $periodDates = fetchPeriodDates();

      foreach ($periodDates as $row) {
        echo "Started on ".convertDateToMDY($row['startDate']).". Ended on ".convertDateToMDY($row['endDate'])."<br><br>";
      }
      ?>

  <h2>Your next period is coming in X days. </h2>

</body>
</html>



