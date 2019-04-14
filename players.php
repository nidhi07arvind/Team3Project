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
      
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="pointsTable.php">Points table</a></li>
              <li><a href="teams.php">Teams</a></li>
              <!-- li><a href="players.php">Players</a></li ---> 
              <li><a href="login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <div class="hero text-center">
      <h1>Cricket World Cup 2019</h1>
      <p>The fun is Out There</p>
    </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.11.0/d3.js"></script>
  <script src="data.js"></script>
  <script src="app.js"></script>
</body> 

<?php
  $select_str0 = '*';
  $table_str0 = 'Player';
  $where_str0 = '';

  mysqli_select_db($conn, $db);

  $sql = "SELECT $select_str0 FROM $table_str0 " . $where_str0 ;
  //echo $sql;
  $r = mysqli_query($conn, $sql) or die("Bad query: $sql");

  $player_table_name = 'Players';

  $player_c1_hdr = 'F_Name';
  $player_c2_hdr = 'L_Name';
  $player_c3_hdr = 'Player_Id';
  $player_c4_hdr = 'Runs';
  $player_c5_hdr = 'Tot_Num_Matches';
  $player_c6_hdr = 'Balls';
  $player_c7_hdr = 'Wickets';
  $player_c8_hdr = 'Team_Id';
  $player_c9_hdr = 'Specialization';
  
  $player_c1_name = 'First name';
  $player_c2_name = 'Last name';
  $player_c3_name = 'Player ID';
  $player_c4_name = 'Runs';
  $player_c5_name = 'Total number of matches played';
  $player_c6_name = 'Balls';
  $player_c7_name = 'Wickets';
  $player_c8_name = 'Team name';
  $player_c9_name = 'Specialization';
  
/*
  echo"<table border='1'>";
  //echo"<tr><td>$player_c1_name</td><td>$player_c2_name</td><td>$player_c3_name</td><td>$player_c4_name</td><td>$player_c5_name</td><td>$player_c6_name</td><td>$player_c7_name</td><td>$player_c8_name</td><td>$player_c9_name</td></tr>\n";
  echo"<tr><td>$player_c8_name</td><td>$player_c1_name</td><td>$player_c2_name</td></tr>\n";
  while($a = $r->fetch_assoc()){
      echo "<tr>";
      echo "<td>{$a[$player_c8_hdr]}</td>";
      echo "<td>{$a[$player_c1_hdr]}</td>";
      echo "<td>{$a[$player_c2_hdr]}</td>";
      //echo "<td>{$a[$player_c3_hdr]}</td>";
      //echo "<td>{$a[$player_c4_hdr]}</td>";
      //echo "<td>{$a[$player_c5_hdr]}</td>";
      //echo "<td>{$a[$player_c6_hdr]}</td>";
      //echo "<td>{$a[$player_c7_hdr]}</td>";
      //echo "<td>{$a[$player_c8_hdr]}</td>";
      //echo "<td>{$a[$player_c9_hdr]}</td>";
      echo "</tr>";
    }
  echo "</table>";
*/
?>

Fetch player information
<form action="display_players.php" method="post" >
  Team name         : <input type="text" name=sTeam><br>
  Player First name : <input type="text" name=sFName><br> 
  Player Last name  : <input type="text" name=sLName> <br>
  <input type="checkbox" name=sRuns value=1> Runs<br>
  <input type="checkbox" name=sBalls value=1> Balls<br>  
  <input type="checkbox" name=sWickets value=1> Wickets<br> 
  <input type="checkbox" name=sNumMatches value=1> # of matches played<br> 
  <input type="checkbox" name=sSpecialization value=1> Specialization<br> 
  <input type="submit" value="Submit">
</form>


</body> 
</html>






