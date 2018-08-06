<?php

function nav_main($dbc, $page){ 		# get and set data of Navbar menu

	$q = "SELECT * FROM pages";			#used in: template/navigation.php
	$r = mysqli_query($dbc, $q);

	while ($nav = mysqli_fetch_assoc($r)) { ?>

	<li <?php if($page == $nav['slug']){ echo 'class="active"';} ?>><a href="?page=<?php echo $nav['slug']; ?>"><strong><?php echo $nav['label']; ?></strong></a></li>

	<?php
	unset($nav);
	}
	unset($page, $q, $r);
}

?>
