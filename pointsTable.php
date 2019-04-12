<?php
  include_once 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>
<?php
    $sql = "SELECT * FROM PointsTable;";
    $result = mysqli_query($conn, $sql) or die("Bad query: $sql");

    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck >0) {
    echo"<table border='1'>";
    echo"<tr><td>Team</td><td>Rank</td><td>Matches</td><td>Won</td><td>Lost</td><td>Tied</td><td>Points</td><td>RunRate</td></tr>\n";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['Team_Name']}</td>";
        echo "<td>{$row['Team_Rank']}</td>";
        echo "<td>{$row['Tot_Mat_Played']}</td>";
        echo "<td>{$row['Matches_Won']}</td>";
        echo "<td>{$row['Matches_Lost']}</td>";
        echo "<td>{$row['Matches_Tied']}</td>";
        echo "<td>{$row['Points']}</td>";
        echo "<td>{$row['Run_Rate']}</td>";
        echo "</tr>";
     }
    echo "</table>";
  }
?>
</body> 
</html>






