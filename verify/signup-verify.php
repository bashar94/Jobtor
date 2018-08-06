<?php



$token = md5(uniqid(rand(), TRUE));

if (!isset($_POST['token']) || !isset($_SESSION['token'])){
	$_SESSION['token'] = $token;
}

if($_POST){
	if($_POST['token'] == $_SESSION['token']){
		unset($_SESSION['token']);

		#creating username automatically using email address
		$arr = explode("@", mysqli_real_escape_string($dbc, htmlspecialchars($_POST['email'])), 2);
		$firstUsername = $arr[0];

		#checking if the username already exists
		$r = data_user($dbc, $firstUsername); 	#function/data.php

		if(mysqli_num_rows($r) == 1){

			$firstUsername = $firstUsername.mysqli_fetch_assoc($r)['id'];
		}

		unset($r, $arr);

		$fullname = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['fullname']));
		$email = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['email']));
		$phone = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['phone']));
		$password = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['password']));
		$college = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['college']));
		$division = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['division']));
		$zilla = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['zilla']));
		$thana = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['thana']));
		$date = date('Y-m-d H:i:s');

		if(isset($_POST['designation'])) {

			$birth = date('Y-m-d',strtotime(mysqli_real_escape_string($dbc, htmlspecialchars($_POST['birth']))));
			$regNo = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['regNo']));
			$work1 = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['work1']));
			$work2 = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['work2']));
			$designation = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['designation']));

			#inserting new user data
			$q = "INSERT INTO users (create_date, fullname, email, phone, password, username, birthdate, college, mbbs_reg, work1, work_division, work_zilla, work_thana, work2, designation, pass_change, doctor) VALUES('$date', '$fullname', '$email', '$phone', SHA1('$password'), '$firstUsername', '$birth', '$college', '$regNo', '$work1', '$division', '$zilla', '$thana', '$work2', '$designation', '$date',1)";
			$r = mysqli_query($dbc, $q);

			unset($birth, $regNo, $work1, $work2, $designation, $q, $r, $firstUsername);

		}else{
				$street = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['street']));

				$q = "INSERT INTO users (create_date, fullname, email, phone, password, username, college, street, work_division, work_zilla, work_thana, pass_change,doctor) VALUES('$date', '$fullname', '$email', '$phone', SHA1('$password'), '$firstUsername', '$college', '$street', '$division', '$zilla', '$thana', '$date',0)";
				$r = mysqli_query($dbc, $q);
				unset($street, $q, $r, $firstUsername);
		}
		unset($fullname, $email, $phone, $password, $college, $division, $zilla, $thana, $date);

		unset($_POST);
		header('Location: ?page=login');
		exit();
	}
	unset($_POST);
}
?>
