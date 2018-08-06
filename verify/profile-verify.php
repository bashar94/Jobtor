<?php
if(isset($_SESSION['username'])){

	$profile = mysqli_fetch_assoc(data_user($dbc, $pageid));
}else{
	header("Location: ?page=login");
	exit();
}
?>
