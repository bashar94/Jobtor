<?php

$token = md5(uniqid(rand(), TRUE));

if (!isset($_POST['token']) || !isset($_SESSION['token'])){
	$_SESSION['token'] = $token;
}


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['token'])){
	if($_POST['token'] == $_SESSION['token']){
		unset($_SESSION['token']);
		$username = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['username']));
		$password = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['password']));

		$q = "SELECT * FROM users WHERE (email ='$username' or username ='$username') AND password = SHA1('$password')";
		$r = mysqli_query($dbc, $q);

		unset($username, $password);

		if(mysqli_num_rows($r) == 1){

			$date = date('Y-m-d H:i:s');

			while($table_data = mysqli_fetch_assoc($r)){
				$_SESSION['username'] = $table_data['username'];
				$_SESSION['pp_url'] = $table_data['pp_url'];
				$_SESSION['login_time'] = $date;
				unset($table_data);
			}
			unset($date, $r, $q, $_POST);

			header('Location: ?page=home');
			exit();

		}else{
			unset($r, $q, $_POST);
			header('Location: ?page=login&success=false');
			exit();
		}
	}else{
		unset($_POST);
		header('Location: ?page=login');
		exit();
	}
}
?>
