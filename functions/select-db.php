<?php

function data_user($dbc, $page){        # function to get data from 'users' table

	$q = "SELECT * FROM users WHERE username = '$page'";	#used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	unset($q, $page);

	return $r;
}

function any_table_data($dbc, $table, $vn, $value){        # function to get data from any  table

	$q = "SELECT * FROM ".$table." WHERE ".$vn." = '$value'";  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	unset($table, $vn, $value, $q);

	return $r;
}

function all_data_table($dbc, $table){        # function to get all data from a table

	$q = "SELECT * FROM ".$table;  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	unset($table, $q);

	return $r;
}

function all_table_count($dbc, $table){
	$q = "SELECT COUNT(*) as total FROM ".$table;
	$r = mysqli_query($dbc, $q);

	unset($table, $q);

	return mysqli_fetch_assoc($r)['total'];
}

function specific_data_count($dbc, $table, $vn, $value){

	$q = "SELECT COUNT(*) as total FROM ".$table." WHERE ".$vn." = '$value'";
	$r = mysqli_query($dbc, $q);

	unset($table, $vn, $value, $q);

	return mysqli_fetch_assoc($r)['total'];
}

?>
