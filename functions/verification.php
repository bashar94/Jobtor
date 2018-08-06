<?php
function fb_verify($dbc, $val){
	$r = any_table_data($dbc, 'users', 'username', $val);
  while($table_data = mysqli_fetch_assoc($r)){
		$link = $table_data['fb_profile'];
		$name = $table_data['fb_name'];
		unset($table_data);
	}
	unset($r, $val);

  if(strlen($name) == 0 || strlen($link) == 0){
		unset($name, $link);

   	return false;
  }else{
		unset($name, $link);

    return true;
  }
}

function pass_change_verify($dbc, $val, $login_time){
	$r = any_table_data($dbc, 'users', 'username', $val);
  while($table_data = mysqli_fetch_assoc($r)){
		$pass_change = $table_data['pass_change'];
		unset($table_data);
	}
	unset($r, $val);

  if($login_time < $pass_change){
		unset($login_time, $pass_change);
		session_unset();
		header('Location: /login');
	}
	unset($login_time, $pass_change);
}

function isDate($date){

	list($y, $m, $d) = explode('-', $date);
	unset($date);
	if(checkdate($m, $d, $y)){
		unset($m, $d, $y);
	  return true;
	}else{
		unset($m, $d, $y);
		return false;
	}
}


?>
