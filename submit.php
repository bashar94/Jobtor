<?php
session_start();
include_once('config/connection.php');  //database connection
include_once('functions/select-db.php');


if(isset($_GET['id']) && isset($_GET['cat'])){
  $id = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['id']));
  $cat = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['cat']));

  $a = mysqli_fetch_assoc(any_table_data($dbc, $cat, "id", $id));

  if(isset($a['payment'])){
    header("Location: .?page=result&pn=1&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[day_month]&type=sub");
  }else{
    header("Location: .?page=result&pn=1&from=$a[date_from]&to=$a[date_to]&division=$a[division]&zilla=$a[zilla]&thana=$a[thana]&duration=$a[duration]&day_month=$a[day_month]&type=job");
  }
  mysqli_close($dbc);
  unset($dbc,$a, $id, $cat);

  exit();

}elseif(isset($_POST['month'])){
  $month = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['month']));
  $year = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['year']));

  $division = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['division']));
  $zilla = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['zilla']));
  $thana = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['thana']));

  header("Location: .?page=result&pn=1&month=$month&year=$year&division=$division&zilla=$zilla&thana=$thana&type=pjob");

  mysqli_close($dbc);
  unset($dbc, $_POST, $month, $year, $division, $zilla, $thana);
  exit();

}else{
  $from = date('Y-m-d',strtotime(mysqli_real_escape_string($dbc, htmlspecialchars($_POST['datefrom']))));
  $to = date('Y-m-d',strtotime(mysqli_real_escape_string($dbc, htmlspecialchars($_POST['dateto']))));
  $duration = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['duration']));
  $day_month = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['daymonth']));
  $date = date('Y-m-d H:i:s');

  $user = mysqli_fetch_assoc(data_user($dbc, $_SESSION['username']));

  if($user['doctor']){
    $division = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['division']));
    $zilla = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['zilla']));
    $thana = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['thana']));
  }else{
    $division = $user['work_division'];
    $zilla = $user['work_zilla'];
    $thana = $user['work_thana'];
  }


  if(isset($_POST['payment'])){
    $payment = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['payment']));

    if($user['doctor']){
      $hospital = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['hospital']));
    }else{
      $hospital = $user['college'];
    }
    $details = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['details']));


    $q = "SELECT * FROM sub WHERE date_to = '$to' AND date_from ='$from' AND duration = '$duration' AND day_month = '$day_month' AND division = '$division' AND zilla = '$zilla' AND thana = '$thana' AND hospital_name = '$hospital' AND payment = '$payment'";
  	$r = mysqli_query($dbc, $q);

  	if(mysqli_num_rows($r) == 0){
      $q = "INSERT INTO sub (post_date, username, date_to, date_from, division, zilla, thana, duration, day_month, payment, hospital_name, details) VALUES('$date', '$_SESSION[username]', '$to', '$from', '$division', '$zilla', '$thana', '$duration', '$day_month', '$payment', '$hospital', '$details')";
    	$r = mysqli_query($dbc, $q);
    }

    header("Location: .?page=result&pn=1&from=$from&to=$to&division=$division&zilla=$zilla&thana=$thana&duration=$duration&day_month=$day_month&type=sub");
    mysqli_close($dbc);
    unset($dbc, $q, $r, $_POST, $payment, $hospital, $details, $from, $to, $duration, $day_month, $date, $user, $division, $zilla, $thana);
    exit();

  }else{
    $q = "SELECT * FROM job WHERE date_to ='$to' AND date_from ='$from' AND duration = '$duration' AND day_month = '$day_month' AND division = '$division' AND zilla = '$zilla' AND thana = '$thana'";
  	$r = mysqli_query($dbc, $q);

  	if(mysqli_num_rows($r) == 0){
      $q = "INSERT INTO job (post_date, username, date_to, date_from, division, zilla, thana, duration, day_month) VALUES('$date', '$_SESSION[username]', '$to', '$from', '$division', '$zilla', '$thana', '$duration', '$day_month')";
    	$r = mysqli_query($dbc, $q);
    }
    mysqli_close($dbc);
    header("Location: .?page=result&pn=1&from=$from&to=$to&division=$division&zilla=$zilla&thana=$thana&duration=$duration&day_month=$day_month&type=job");
    unset($dbc, $q, $r, $_POST, $from, $to, $duration, $day_month, $date, $user, $division, $zilla, $thana);
    exit();
  }


}
 ?>
