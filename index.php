<?php

# Session start:
session_start();
include_once('config/setup.php');

if (isset($_SESSION['username'])) {
	$user = mysqli_fetch_assoc(data_user($dbc, $_SESSION['username']));
	pass_change_verify($dbc, $_SESSION['username'],$_SESSION['login_time']);
}


if($pageid == 'login'){
	include_once('verify/login-verify.php');
}elseif($pageid == 'signuph' || $pageid == 'signupd'){
	include_once('verify/signup-verify.php');
}elseif($pageid == 'logout'){
	include_once('config/logout.php');
}elseif($pageid == 'settings'){
	include_once('verify/settings-verify.php');
}elseif($pageid == 'search' || $pageid == 'result' || $pageid == 'subs' || $pageid == 'jobs' || $pageid == 'jobo' || $pageid == 'jobv' || $pageid == 'jobp'){
	include_once('verify/search-verify.php');
}elseif(mysqli_num_rows(data_user($dbc, $pageid)) == 1){
	include_once('verify/profile-verify.php');
}

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
		<title><?php echo $site_title; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include_once('config/css.php');?>

	</head>


	<body>

		<div class="content">

		<!-- navbar starts -->
			<?php include_once(D_TEMPLATE.'/navigation.php'); ?> <!-- setting the Nav bar from Template folder... D_TEMPLATE is a String variable in setup.php -->
		<!-- navbar ends -->

		<!-- main content starts -->

			<div class="main">
				<?php include_once(body_content($dbc, $pageid)); ?>
			</div>
		</div>

		<?php
		mysqli_close($dbc);
		unset($dbc, $pageid, $profileid, $site_title, $user, $pn, $_GET);

		 ?>
		<!-- main content ends -->

		<!-- footer starts -->
			<?php include_once(D_TEMPLATE.'/footer.php'); ?>

			<?php include_once('config/js.php');?>

	</body>
</html>
