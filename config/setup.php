<?php

# Site title
$site_title = 'জবটর';

# Database Connection:
include_once('config/connection.php');  //database connection

# Functions:
include_once('functions/select-db.php');    // functions to get data from tables
include_once('functions/template.php');  // get and set data of Nav bar
include_once('functions/body.php');  // function to load body content
include_once('functions/update-db.php');  // function to update database info
include_once('functions/verification.php');


# Constants:
DEFINE('D_TEMPLATE', 'template');  //a constant variale used in index.php

# All GET methods
if(isset($_GET['page'])){
	$pageid = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['page'])); // Getting 'Page ID' from URL
}else{
	$pageid = '';  // Setting 'Page ID' when not found in URL
}

if(isset($_GET['profile'])){
	$profileid = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['profile'])); // Getting 'Profile ID' from URL
}else{
	if(isset($_GET['page'])){
		$pageid = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['page']));

		if($pageid == "settings"){
			$profileid = 'profile';
		}else{
			$profileid = 'overview';  // Setting 'Profile ID' when not found in URL

		}
	}
}

if(isset($_GET['pn'])){
	$pn = mysqli_real_escape_string($dbc, htmlspecialchars($_GET['pn'])); // Getting 'page no' from URL
}else{
	$pn = 1;  // Setting 'page no' when not found in URL
}




?>
