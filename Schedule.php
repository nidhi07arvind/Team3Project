<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Schedule</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="style_schedule.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
</head>

<body>
  <div class="wrapper">
    <nav class="navbar navbar-default">
      <div class="container-fluid navbar-custom">

        <!-- Brand and toggle get grouped for better mobile display -->
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
              </li> -->
              <li><a href="data.html">Points table</a></li>
              <li><a href="data.html">Teams</a></li>
              <li><a href="data.html">Players</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <div class="hero text-center" style="height:705px">
       <!--div id="SearchSchedule" style="background-color:coral;">RED</div--!>
       <div class="panel panel-default" style="width:20%">
              <div class="panel-heading">Filter</div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <ul class="list-group" id="filters">
                      <li class="filter list-group-item">
                        <label for="date">Enter starting Date</label>
                        <input class="form-control" id="datetime1" type="date" placeholder="1/11/2011" >
                        <label for="date">Enter ending Date</label>
                        <input class="form-control" id="datetime2" type="date" placeholder="1/11/2011">
                        <label for="city">Enter a Team</label>
                        <input class="form-control" id="city" type="text" placeholder="city">
                        <label for="state">Enter a Stadium</label>
                        <input class="form-control" id="state" type="text" placeholder="state">
                        <label for="country">Enter a Country</label>
                        <input class="form-control" id="country" type="text" placeholder="country">
                      </li>
                    </ul>
                     <button id="filter-btn" type="submit" class="btn btn-default" style="border:2px solid white">Filter Table</button>
                  </div>
                </form>
              </div>
            </div>
       <div id="MainDiv">
       
       		<div id ="leagueDiv">
       		
       		<p id ="leagueID" style="color:lightcyan;font-size:30px;"><b>Group Details</b></p>
        	<table id="league" style="width:220%">
        	
        	<?php
    			$sql = "SELECT * FROM Matches;";
    			$result = mysqli_query($conn, $sql) or die("Bad query: $sql");
    			$resultcheck = mysqli_num_rows($result);
    			if ($resultcheck >0) {
    			
    			echo"<tr>
    				<td id ="headerTable">Match ID</td>
    				<td id ="headerTable">Date&Time</td>
    				<td id ="headerTable">Venue</td>
    				<td id ="headerTable">Team_Id</td>
    				<td id ="headerTable">ManOfTheMatch</td>
    			</tr>\n";
    			
    				while($row = mysqli_fetch_assoc($result)) {
       					echo "<tr>";
        				echo "<td id ="rowVal">{$row['Match_Id']}</td>";
        				echo "<td id ="rowVal">{$row['MatchDateAndTime']}</td>";
        				echo "<td id ="rowVal">{$row['Venue']}</td>";
        				echo "<td id ="rowVal">{$row['Team_Id']}</td>";
        				echo "<td id ="rowVal">{$row['ManOfTheMatch']}</td>";
        				echo "</tr>";
     				}
    				echo "</table>";
  				}
			?>
		<br>
		</div>

		
  		</div>
       </div>
    </div>
    
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.11.0/d3.js"></script>
  <script src="comments_schedule.js"></script>
  <script src="app.js"></script>
</body>
</html>
