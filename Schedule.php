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
    				<tr>
  						<th id ="headerTable"><b>Match ID</b></th>
    					<th id ="headerTable">Date&Time</th>
    					<th id ="headerTable">Venue</th> 
   		 				<th id ="headerTable">Team_Id</th>
   		 				<th id ="headerTable">ManOfTheMatch</th>
  					</tr>
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
		
		<div id ="semifinalDiv">
		<p id ="semifinalID"style="color:lightcyan;font-size:30px"><b>Semifinals</b></p>
		<table id="semifinal" style="width:220%">
  		<tr>
  			<th id ="headerTable">Match ID</th>
    		<th id ="headerTable">Date&Time</th>
    		<th id ="headerTable">Venue</th> 
   		 	<th id ="headerTable">Team 1</th>
   		 	<th id ="headerTable">Team 2</th>
   		 	<th id ="headerTable">Result</th>
   		 	<th id ="headerTable">Man of the Match</th>
  		</tr>
 		<tr>
    		<td id ="rowVal">1</td>
    		<td id ="rowVal">14-Apr-2019</td> 
    		<td id ="rowVal">Delhi</td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">India</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Australia</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">India won my 5 runs</a></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Virat Kohli</a></href></td>
  		</tr>
  		<tr>
    		<td id ="rowVal">2</td>
    		<td id ="rowVal">15-Apr-2019</td> 
    		<td id ="rowVal">Chennai</td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">South Africa</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Pakistan</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">SA won my 5 wickets</a></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Faf Du Plesis</a></href></td>
  		</tr>
		</table>
		<br>
		</div>
		
		<div id ="finalDiv">
		<p id ="finalID"style="color:lightcyan;font-size:30px"><b>Final</b></p>
		<table id="final" style="width:220%">
  		<tr>
  			<th id ="headerTable">Match ID</th>
    		<th id ="headerTable">Date&Time</th>
    		<th id ="headerTable">Venue</th> 
   		 	<th id ="headerTable">Team 1</th>
   		 	<th id ="headerTable">Team 2</th>
   		 	<th id ="headerTable">Result</th>
   		 	<th id ="headerTable">Man of the Match</th>
  		</tr>
 		<tr>
    		<td id ="rowVal">1</td>
    		<td id ="rowVal">14-Apr-2019</td> 
    		<td id ="rowVal">Delhi</td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">India</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Australia</a></href></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">India won my 5 runs</a></td>
    		<td id ="rowVal"><a href="https://www.cricbuzz.com/">Virat Kohli</a></href></td>
  		</tr>
		</table>
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
