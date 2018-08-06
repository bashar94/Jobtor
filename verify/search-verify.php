<?php
if(isset($_SESSION['username'])){

  

  if(!$user['doctor'] && ($pageid == "jobo" || $pageid == "jobs" || $pageid == "jobp")){
    header('Location: page?=search');
    exit();
  }

  if($pageid == "jobv" && isset($_POST['deadline'])){

    $deadline = date('Y-m-d',strtotime(mysqli_real_escape_string($dbc, htmlspecialchars($_POST['deadline']))));
    $details = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['details']));
    $date = date('Y-m-d H:i:s');
    if($user['doctor']){
      $hospital = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['hospital']));
      $division = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['division']));
      $zilla = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['zilla']));
      $thana = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['thana']));
    }else{
      $hospital = $user['college'];
      $division = $user['work_division'];
      $zilla = $user['work_zilla'];
      $thana = $user['work_thana'];
    }
    $q = "SELECT * FROM job_per WHERE username = '$user[username]' AND hospital = '$hospital' AND deadline ='$deadline' AND details ='$details' AND division ='$division' AND zilla = '$zilla' AND thana = '$thana'";
  	$r = mysqli_query($dbc, $q);

  	if(mysqli_num_rows($r) == 0){
      $q = "INSERT INTO job_per (post_date, username, deadline, details, hospital, division, zilla, thana) VALUES('$date', '$_SESSION[username]', '$deadline', '$details', '$hospital', '$division', '$zilla', '$thana')";
    	$r = mysqli_query($dbc, $q);

      unset($q, $r, $_POST, $hospital, $division, $zilla, $thana, $date, $details, $deadline);
      header('Location: page?=jobv?success=true');
      exit();
    }else{
      unset($q, $r, $_POST, $hospital, $division, $zilla, $thana, $date, $details, $deadline);
      header('Location: ?page=jobv?duplicate=true');
      exit();
    }
  }
}else{
  header('Location: ?page=login');
  exit();
}
?>
