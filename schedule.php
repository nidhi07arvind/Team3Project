<?php
  include_once 'includes/dbh.inc.php';
  $_POST = array()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cricket World Cup 2019</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
</head>


<body>

<div class="wrapper">
    <nav class="navbar navbar-default">
      <div class="container-fluid navbar-custom">

       
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="col-xs-9 phone-nav">
              <a class="navbar-brand" href="#" id="logo">Home</a>
            </div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navbar-right-custom">
      
              <!-- li><a href="schedule.php">Schedule</a></li --->
              <li><a href="pointsTable.php">Points table</a></li>
              <li><a href="teams.php">Teams</a></li>
              <li><a href="players.php">Players</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <div class="hero text-center">
      <?php
		echo"<table border='1'>";
  		$sql = "SELECT * FROM Matches";
  		$result = mysqli_query($conn, $sql) or die("Bad query: $sql");
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck >0) {
            echo "<tr>";
            echo "<th id ='headerTable'><b>Match ID</b></th>";
            echo "<th id ='headerTable'>Date&Time</th>";
            echo "<th id ='headerTable'>Venue</th> ";
            echo "<th id ='headerTable'>Team_Id</th>";
            echo "<th id ='headerTable'>ManOfTheMatch</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td id ='rowVal'>{$row['Match_Id']}</td>";
                echo "<td id ='rowVal'>{$row['MatchDateAndTime']}</td>";
                echo "<td id ='rowVal'>{$row['Venue']}</td>";
                echo "<td id ='rowVal'>{$row['Team_Id']}</td>";
                echo "<td id ='rowVal'>{$row['ManOfTheMatch']}</td>";
                echo "</tr>";
            }
            echo "</table>";
    	}

		?>
    </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.11.0/d3.js"></script>
  <script src="data.js"></script>
  <script src="app.js"></script>
</body> 
</html>