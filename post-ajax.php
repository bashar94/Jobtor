<?php
session_start();

include_once('connection.php');  //database connection
include_once('../functions/select-db.php');

header('Content-Type: application/json; charset=utf-8');

if(isset($_POST['division'])){
  $data = array();
  $value = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['division']));
  $q = "SELECT zilla FROM place WHERE division = '$value' GROUP BY zilla";  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);
  while($a = mysqli_fetch_assoc($r)){
    array_push($data, $a['zilla']);
    unset($a);
  }
  unset($r, $value, $q);

  echo json_encode($data);
  unset($data);
}

if(isset($_POST['zilla'])){
  $data = array();
  $value = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['zilla']));
  $q = "SELECT thana FROM place WHERE zilla = '$value' GROUP BY thana";  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

  while($a = mysqli_fetch_assoc($r)){
    array_push($data, $a['thana']);
    unset($a);
  }
  unset($r, $value, $q);

  echo json_encode($data);
  unset($data);
}

if(isset($_POST['id']) && isset($_POST['cat'])){
  $id = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['id']));
  $cat = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['cat']));
  $q = "UPDATE ".$cat." SET available = NOT available WHERE id = '$id'";

	$r = mysqli_query($dbc, $q);

  unset($r, $id, $q, $cat);

}
mysqli_close($dbc);
unset($dbc);


?>
