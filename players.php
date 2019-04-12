<?php
  include_once 'includes/dbh.inc.php';
  $_POST = array()
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>
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
  $player_c8_name = 'Team';
  $player_c9_name = 'Specialization';
  

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
?>

<form action="display_players.php" method="post">
  Team: <input type="text" name=sTeam ><br>
  Player First name: <input type="text" name=sFName> and Last name: <input type="text" name=sLName> <br>
  <input type="checkbox" name=sRuns value=1> Runs scored<br>
  <input type="checkbox" name=sBalls value=1> Balls faced<br>  
  <input type="checkbox" name=sWickets value=1> Wickets taken<br> 
  <input type="checkbox" name=sNumMatches value=1> Num. matched played<br> 
  <input type="checkbox" name=sSpecialization value=1> Specialization<br> 
  <input type="submit" value="Submit">
</form>

<?php
  
/*
//$menu = " ";
while($a = $r->fetch_assoc())
{
  //$menu .="<option>" . $a[] . "</option>";
  echo $a[$select_str0];
  print_r($a);
}
//$menu = "</select></form>";
//echo $menu;
?>

</select>
<form>   
  Player First name: <input type="text" name="iFname"><br>
  Player Last name: <input type="text" name="iLname"><br>
  <input type="submit" value="Submit">
</form> 

<?php
echo $_POST['iFname'];


$select_str0 = $player_c8_hdr;
    $table_str0 = 'Player';
    $where_str0 = '';
    $sql = "SELECT DISTINCT $select_str0 FROM $table_str0  " ;
    $r = mysqli_query($conn, $sql) or die("Bad query: $sql");

    $Team_list=" ";
    while($a = $r->fetch_assoc())
    {
      $Team_list .= "<option value=".$a['Team_Id'].">" . $a['Team_Id']. "</option>";
    }
    echo $Team_list;






*/
?>

</body> 
</html>






