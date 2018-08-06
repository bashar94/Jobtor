<?php

function body_content($dbc, $pageid){

	if($pageid == 'signuph'){
		return 'signuph.php';
	}elseif($pageid == 'signupd'){
		return 'signupd.php';
	}elseif(mysqli_num_rows(data_user($dbc, $pageid)) == 1){
		return 'profile.php';
	}elseif($pageid == 'settings'){
		return 'settings.php';
	}elseif($pageid == 'about-us'){
		return 'about-us.php';
	}elseif($pageid == 'contact-us'){
		return 'contact-us.php';
	}elseif($pageid == 'login'){
		return 'login.php';
	}elseif($pageid == '' || $pageid == 'home'){
		if (isset($_SESSION['username'])) {
			if(mysqli_num_rows(data_user($dbc, $_SESSION['username'])) == 1){
				return 'search.php';	
			}else{
				return 'home.php';		
			}
		}else{
			return 'home.php';	
		}
		
	}elseif($pageid == 'facebook'){
		return 'facebook.php';
	}elseif($pageid == 'search'){
		return 'search.php';
	}elseif($pageid == 'jobs'){
		return 'jobs.php';
	}elseif($pageid == 'subs'){
		return 'subs.php';
	}elseif($pageid == 'jobv'){
		return 'jobv.php';
	}elseif($pageid == 'jobo'){
		return 'jobo.php';
	}elseif($pageid == 'jobp'){
		return 'jobp.php';
	}elseif($pageid == 'result'){
		return 'result.php';
	}elseif($pageid == 'forgot'){
		return 'forgot.php';
	}else{
		return 'not-found.php';
	}
}
?>
