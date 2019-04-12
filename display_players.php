<?php
  include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>
<?php
  //foreach($_POST as $key=>$value)
  //{
  //  echo "$key=$value";
  //}

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
 

  $select_str = "";
  $hdr_str = "<tr>";
  $where_str = " WHERE ";
  $numValues = 0;

  if (!empty($_POST['sTeam']))
  {
    $where_str .=  $player_c8_hdr . '="' . $_POST['sTeam'] . '" AND ';
  }
  $select_str .= $player_c8_hdr . ',';
  $hdr_str .= "<td>$player_c8_name</td>";

  if (!empty($_POST['sFName']))
  {
    $where_str .=  $player_c1_hdr . '="' . $_POST['sFName'] . '" AND ';
  }
  $select_str .= $player_c1_hdr . ',';
  $hdr_str .= "<td>$player_c1_name</td>";

  if (!empty($_POST['sLName']))
  {
    $where_str .=  $player_c2_hdr . '="' . $_POST['sLName'] . '" AND ';
  }
  $select_str .= $player_c2_hdr . ',';
  $hdr_str .= "<td>$player_c2_name</td>";

  if (array_key_exists('sRuns',$_POST))
  {
    $select_str .= $player_c4_hdr . ',';
    $hdr_str .= "<td>$player_c4_name</td>";
    $numValues += 1;
  }

  if (array_key_exists('sBalls',$_POST))
  {
    $select_str .= $player_c6_hdr . ',';
    $hdr_str .= "<td>$player_c6_name</td>";
    $numValues += 1;
  }

  if (array_key_exists('sWickets',$_POST))
  {
    $select_str .= $player_c7_hdr . ',';
    $hdr_str .= "<td>$player_c7_name</td>";
    $numValues += 1;
  }

  if (array_key_exists('sNumMatches',$_POST))
  {
    $select_str .= $player_c5_hdr . ',';
    $hdr_str .= "<td>$player_c5_name</td>";
    $numValues += 1;
  }

  if (array_key_exists('sSpecialization',$_POST))
  {
    $select_str .= $player_c9_hdr . ',';
    $hdr_str .= "<td>$player_c9_name</td>";
    $numValues += 1;
  }


  $select_str = rtrim($select_str,',');
  $where_str = rtrim($where_str,' AND ');
  $hdr_str .= "</tr>";

  //echo $select_str;

  $select_str0 = $select_str;
  $table_str0 = 'Player';
  $where_str0 = $where_str;

  mysqli_select_db($conn, $db);

  $sql = "SELECT $select_str0 FROM $table_str0 " . $where_str0 ;
  echo $sql;
  $r = mysqli_query($conn, $sql) or die("Bad query: $sql");


  echo"<table border='1'>";
  //echo"<tr><td>$player_c1_name</td><td>$player_c2_name</td><td>$player_c3_name</td><td>$player_c4_name</td><td>$player_c5_name</td><td>$player_c6_name</td><td>$player_c7_name</td><td>$player_c8_name</td><td>$player_c9_name</td></tr>\n";
  echo $hdr_str;
  while($a = $r->fetch_assoc()){
      echo "<tr>";
      echo "<td>{$a[$player_c8_hdr]}</td>";
      echo "<td>{$a[$player_c1_hdr]}</td>";
      echo "<td>{$a[$player_c2_hdr]}</td>";
      if (!empty($_POST['sRuns'])) {echo "<td>{$a[$player_c4_hdr]}</td>";}
      if (!empty($_POST['sBalls'])) {echo "<td>{$a[$player_c6_hdr]}</td>";}
      if (!empty($_POST['sWickets'])) {echo "<td>{$a[$player_c7_hdr]}</td>";}
      if (!empty($_POST['sNumMatches'])) {echo "<td>{$a[$player_c5_hdr]}</td>";}
      if (!empty($_POST['sSpecialization'])) {echo "<td>{$a[$player_c9_hdr]}</td>";}
      
      echo "</tr>";
    }
  echo "</table>";




?>

</body> 
</html>






